<?php

namespace App\Services\Paystack;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PaystackService
{
    protected $secretKey;
    protected $publicKey;
    protected $baseUrl = 'https://api.paystack.co';

    public function __construct()
    {
        $this->secretKey = config('services.paystack.secret_key');
        $this->publicKey = config('services.paystack.public_key');
    }

    /**
     * Initialize a transaction
     */
    public function initializeTransaction(array $data): array
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->secretKey,
            'Content-Type' => 'application/json',
        ])->post($this->baseUrl . '/transaction/initialize', $data);

        if ($response->successful()) {
            return $response->json();
        }

        Log::error('Paystack initialization failed', [
            'status' => $response->status(),
            'body' => $response->body(),
        ]);

        throw new \Exception('Failed to initialize Paystack transaction');
    }

    /**
     * Verify a transaction
     */
    public function verifyTransaction(string $reference): array
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->secretKey,
            'Content-Type' => 'application/json',
        ])->get($this->baseUrl . '/transaction/verify/' . $reference);

        if ($response->successful()) {
            return $response->json();
        }

        Log::error('Paystack verification failed', [
            'reference' => $reference,
            'status' => $response->status(),
            'body' => $response->body(),
        ]);

        throw new \Exception('Failed to verify Paystack transaction');
    }

    /**
     * Create a customer
     */
    public function createCustomer(array $data): array
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->secretKey,
            'Content-Type' => 'application/json',
        ])->post($this->baseUrl . '/customer', $data);

        if ($response->successful()) {
            return $response->json();
        }

        Log::error('Paystack customer creation failed', [
            'status' => $response->status(),
            'body' => $response->body(),
        ]);

        throw new \Exception('Failed to create Paystack customer');
    }

    /**
     * Verify webhook signature
     */
    public function verifyWebhookSignature(string $payload, string $signature): bool
    {
        $webhookSecret = config('services.paystack.webhook_secret');
        $computedSignature = hash_hmac('sha512', $payload, $webhookSecret);

        return hash_equals($computedSignature, $signature);
    }

    /**
     * Get public key
     */
    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    /**
     * Create transaction data for donation
     */
    public function createDonationTransaction(array $donationData): array
    {
        return [
            'email' => $donationData['email'],
            'amount' => $donationData['amount'] * 100, // Convert to kobo
            'currency' => $donationData['currency'] ?? 'NGN',
            'reference' => $donationData['reference'],
            'callback_url' => $donationData['callback_url'] ?? route('donations.callback'),
            'metadata' => [
                'campaign_id' => $donationData['campaign_id'],
                'donor_name' => $donationData['donor_name'] ?? null,
                'is_anonymous' => $donationData['is_anonymous'] ?? false,
                'message' => $donationData['message'] ?? null,
            ],
        ];
    }
}
