<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Paystack\PaystackService;
use App\Models\Campaign;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class DonationController extends Controller
{
    protected $paystackService;

    public function __construct(PaystackService $paystackService)
    {
        $this->paystackService = $paystackService;
    }

    /**
     * Initialize a donation transaction
     */
    public function initialize(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'campaign_id' => 'required|exists:campaigns,id',
                'amount' => 'required|numeric|min:100', // Minimum 100 kobo (1 NGN)
                'currency' => 'string|in:NGN,USD,GHS,ZAR',
                'donor_name' => 'nullable|string|max:255',
                'donor_email' => 'required|email|max:255',
                'message' => 'nullable|string|max:1000',
                'is_anonymous' => 'boolean',
            ]);

            $campaign = Campaign::findOrFail($validated['campaign_id']);

            if (!$campaign->is_active) {
                return response()->json([
                    'success' => false,
                    'message' => 'Campaign is not active',
                ], 400);
            }

            $reference = 'DON_' . Str::random(10) . '_' . time();

            $donation = Donation::create([
                'campaign_id' => $validated['campaign_id'],
                'user_id' => auth()->id(),
                'amount' => $validated['amount'],
                'currency' => $validated['currency'] ?? 'NGN',
                'paystack_reference' => $reference,
                'status' => 'pending',
                'donor_name' => $validated['donor_name'],
                'donor_email' => $validated['donor_email'],
                'message' => $validated['message'],
                'is_anonymous' => $validated['is_anonymous'] ?? false,
            ]);

            $transactionData = $this->paystackService->createDonationTransaction([
                'email' => $validated['donor_email'],
                'amount' => $validated['amount'],
                'currency' => $validated['currency'] ?? 'NGN',
                'reference' => $reference,
                'campaign_id' => $validated['campaign_id'],
                'donor_name' => $validated['donor_name'],
                'is_anonymous' => $validated['is_anonymous'] ?? false,
                'message' => $validated['message'],
            ]);

            $paystackResponse = $this->paystackService->initializeTransaction($transactionData);

            return response()->json([
                'success' => true,
                'data' => [
                    'donation' => $donation,
                    'paystack' => $paystackResponse,
                    'public_key' => $this->paystackService->getPublicKey(),
                ],
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to initialize donation',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Handle Paystack webhook
     */
    public function webhook(Request $request): JsonResponse
    {
        try {
            $payload = $request->getContent();
            $signature = $request->header('X-Paystack-Signature');

            if (!$this->paystackService->verifyWebhookSignature($payload, $signature)) {
                return response()->json(['message' => 'Invalid signature'], 400);
            }

            $data = json_decode($payload, true);

            if ($data['event'] === 'charge.success') {
                $reference = $data['data']['reference'];
                $donation = Donation::where('paystack_reference', $reference)->first();

                if ($donation) {
                    $donation->update([
                        'status' => 'successful',
                        'paystack_response' => $data,
                        'paid_at' => now(),
                    ]);

                    // Update campaign current amount
                    $campaign = $donation->campaign;
                    $campaign->increment('current_amount', $donation->amount);
                }
            }

            return response()->json(['message' => 'Webhook processed successfully']);
        } catch (\Exception $e) {
            \Log::error('Paystack webhook error', [
                'error' => $e->getMessage(),
                'payload' => $request->getContent(),
            ]);

            return response()->json(['message' => 'Webhook processing failed'], 500);
        }
    }

    /**
     * Verify a donation transaction
     */
    public function verify(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'reference' => 'required|string',
            ]);

            $donation = Donation::where('paystack_reference', $validated['reference'])->first();

            if (!$donation) {
                return response()->json([
                    'success' => false,
                    'message' => 'Donation not found',
                ], 404);
            }

            $paystackResponse = $this->paystackService->verifyTransaction($validated['reference']);

            if ($paystackResponse['status']) {
                $donation->update([
                    'status' => 'successful',
                    'paystack_response' => $paystackResponse,
                    'paid_at' => now(),
                ]);

                // Update campaign current amount
                $campaign = $donation->campaign;
                $campaign->increment('current_amount', $donation->amount);
            }

            return response()->json([
                'success' => true,
                'data' => [
                    'donation' => $donation->fresh(),
                    'paystack' => $paystackResponse,
                ],
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to verify donation',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
