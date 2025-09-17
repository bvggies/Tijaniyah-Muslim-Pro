<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PrayerController;
use App\Http\Controllers\Api\DonationController;

// API routes
Route::prefix('api')->group(function () {
    
    // Prayer times API
    Route::post('/prayer/compute', [PrayerController::class, 'compute']);
    Route::get('/prayer/week', [PrayerController::class, 'week']);
    
    // Donations API
    Route::post('/donations/paystack/initialize', [DonationController::class, 'initialize']);
    Route::post('/donations/paystack/webhook', [DonationController::class, 'webhook']);
    Route::post('/donations/verify', [DonationController::class, 'verify']);
    
    // Protected routes (require authentication)
    Route::middleware('auth:sanctum')->group(function () {
        // Add authenticated API routes here if needed
    });
});
