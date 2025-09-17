<?php

// Simple health check endpoint for Railway
Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'timestamp' => now(),
        'app' => 'Tijaniyah Muslim Pro',
        'version' => '1.0.0'
    ]);
});

// Alternative health check for Railway
Route::get('/healthcheck', function () {
    return response()->json(['status' => 'healthy']);
});
