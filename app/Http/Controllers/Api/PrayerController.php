<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Prayer\PrayerService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class PrayerController extends Controller
{
    protected $prayerService;

    public function __construct(PrayerService $prayerService)
    {
        $this->prayerService = $prayerService;
    }

    /**
     * Compute prayer times for a specific day
     */
    public function compute(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'latitude' => 'required|numeric|between:-90,90',
                'longitude' => 'required|numeric|between:-180,180',
                'method' => 'string|in:MWL,ISNA,EGYPT,MAKKAH,KARACHI,TEHRAN,JAFARI',
                'date' => 'date|after_or_equal:today',
            ]);

            $prayerTimes = $this->prayerService->computeDayTimes(
                $validated['latitude'],
                $validated['longitude'],
                $validated['method'] ?? 'MWL',
                $validated['date'] ?? null
            );

            return response()->json([
                'success' => true,
                'data' => $prayerTimes,
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
                'message' => 'Failed to compute prayer times',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Get prayer times for a week
     */
    public function week(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'latitude' => 'required|numeric|between:-90,90',
                'longitude' => 'required|numeric|between:-180,180',
                'method' => 'string|in:MWL,ISNA,EGYPT,MAKKAH,KARACHI,TEHRAN,JAFARI',
                'start_date' => 'date',
            ]);

            $weekTimes = $this->prayerService->computeWeekTimes(
                $validated['latitude'],
                $validated['longitude'],
                $validated['method'] ?? 'MWL',
                $validated['start_date'] ?? null
            );

            return response()->json([
                'success' => true,
                'data' => $weekTimes,
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
                'message' => 'Failed to compute week prayer times',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
