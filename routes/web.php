<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\TempAuthController;
use App\Http\Controllers\AINoorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Mobile Dashboard Route
Route::get('/mobile-dashboard', function () {
    return view('mobile.dashboard');
})->name('mobile-dashboard');

// Debug route for AI Noor
Route::get('/debug-ai', function () {
    try {
        $service = new \App\Services\OpenAIService();
        return response()->json([
            'configured' => $service->isConfigured(),
            'api_key' => config('openai.api_key') ? 'Set' : 'Not set',
            'model' => config('openai.model'),
            'timeout' => config('openai.timeout'),
            'max_tokens' => config('openai.max_tokens')
        ]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()]);
    }
});

// Test AI Noor with a simple prompt
Route::get('/test-ai-simple', function () {
    try {
        // Test OpenAI service with actual generation
        $service = new \App\Services\OpenAIService();
        $result = $service->generateResponse('Hello, how are you?');
        return response()->json($result);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()]);
    }
});

// Test AI Noor generate endpoint directly (without CSRF)
Route::post('/test-ai-generate', function (Illuminate\Http\Request $request) {
    try {
        $service = new \App\Services\OpenAIService();
        $result = $service->generateResponse($request->input('prompt', 'Hello, how are you?'));
        return response()->json($result);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()]);
    }
})->withoutMiddleware(['web']);

// Test AI Noor view without middleware
Route::get('/test-ai-noor', function () {
    return view('features.ai-noor');
});


// Guest Access Routes (Limited Features)
Route::middleware(['guest-access'])->group(function () {
    // Guest Dashboard
    Route::get('/guest-dashboard', function () {
        return view('guest.dashboard');
    })->name('guest-dashboard');
    
    // Limited Islamic Features for Guests
    Route::get('/guest/prayer-times', function () {
        return view('guest.features.prayer-times');
    })->name('guest.prayer-times');
    
    Route::get('/guest/qibla', function () {
        return view('guest.features.qibla');
    })->name('guest.qibla');
    
    Route::get('/guest/duas', function () {
        return view('guest.features.duas');
    })->name('guest.duas');
    
    Route::get('/guest/quran', function () {
        return view('guest.features.quran');
    })->name('guest.quran');
    
    Route::get('/guest/makkah-live', function () {
        return view('guest.features.makkah-live');
    })->name('guest.makkah-live');
    
    // Guest AI Noor (Limited)
    Route::get('/guest/ai-noor', [AINoorController::class, 'index'])->name('guest.ai-noor');
    Route::post('/guest/ai-noor/generate', [AINoorController::class, 'generate'])->name('guest.ai-noor.generate');
    Route::get('/guest/ai-noor/search', [AINoorController::class, 'search'])->name('guest.ai-noor.search');
    
    // Guest Login/Register
    Route::get('/guest/login', function () {
        return view('guest.login');
    })->name('guest.login');
    
    Route::get('/guest/register', function () {
        return view('guest.register');
    })->name('guest.register');
});

// Temporary login routes (works without database)
Route::get('/temp-login', [TempAuthController::class, 'create'])->name('temp-login');
Route::post('/temp-login', [TempAuthController::class, 'store']);
Route::post('/temp-logout', [TempAuthController::class, 'destroy'])->name('temp-logout');

Route::get('/dashboard', function () {
    $user = session('temp_user');
    if (!$user) {
        return redirect()->route('temp-login');
    }
    return view('dashboard', compact('user'));
})->name('dashboard');

// Islamic Features Routes
Route::middleware(['temp-auth'])->group(function () {
    // Prayer Times
    Route::get('/prayer-times', function () {
        return view('features.prayer-times');
    })->name('prayer-times');
    
    // Qibla
    Route::get('/qibla', function () {
        return view('features.qibla');
    })->name('qibla');
    
    // Duas
    Route::get('/duas', function () {
        return view('features.duas');
    })->name('duas');
    
    // Quran
    Route::get('/quran', function () {
        return view('features.quran');
    })->name('quran');
    
    // Tasbih
    Route::get('/tasbih', function () {
        return view('features.tasbih');
    })->name('tasbih');
    
    // Wazifa
    Route::get('/wazifa', function () {
        return view('features.wazifa');
    })->name('wazifa');
    
    // Lazim
    Route::get('/lazim', function () {
        return view('features.lazim');
    })->name('lazim');
    
    // Zikr Jumma
    Route::get('/zikr-jumma', function () {
        return view('features.zikr-jumma');
    })->name('zikr-jumma');
    
    // Journal
    Route::get('/journal', function () {
        return view('features.journal');
    })->name('journal');
    
    // Scholars
    Route::get('/scholars', function () {
        return view('features.scholars');
    })->name('scholars');
    
    // Community
    Route::get('/community', function () {
        return view('features.community');
    })->name('community');
    
    // Mosques
    Route::get('/mosques', function () {
        return view('features.mosques');
    })->name('mosques');
    
    // Makkah Live
    Route::get('/makkah-live', function () {
        return view('features.makkah-live');
    })->name('makkah-live');
    
    // AI Noor
    Route::get('/ai-noor', [AINoorController::class, 'index'])->name('ai-noor');
    Route::post('/ai-noor/generate', [AINoorController::class, 'generate'])->name('ai-noor.generate');
    Route::get('/ai-noor/status', [AINoorController::class, 'status'])->name('ai-noor.status');
    Route::get('/ai-noor/search', [AINoorController::class, 'search'])->name('ai-noor.search');
});

// Admin Routes
Route::middleware(['temp-auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    // Admin Management Sections
    Route::get('/users-management', function () {
        return view('admin.users-management');
    })->name('admin.users-management');
    
    Route::get('/duas-management', function () {
        return view('admin.duas-management');
    })->name('admin.duas-management');
    
    Route::get('/community-management', function () {
        return view('admin.community-management');
    })->name('admin.community-management');
    
    Route::get('/prayer-settings', function () {
        return view('admin.prayer-settings');
    })->name('admin.prayer-settings');
    
    Route::get('/qibla-settings', function () {
        return view('admin.qibla-settings');
    })->name('admin.qibla-settings');
    
    Route::get('/quran-management', function () {
        return view('admin.quran-management');
    })->name('admin.quran-management');
    
    Route::get('/tasbih-management', function () {
        return view('admin.tasbih-management');
    })->name('admin.tasbih-management');
    
    Route::get('/wazifa-management', function () {
        return view('admin.wazifa-management');
    })->name('admin.wazifa-management');
    
    Route::get('/lazim-management', function () {
        return view('admin.lazim-management');
    })->name('admin.lazim-management');
    
    Route::get('/zikr-jumma-management', function () {
        return view('admin.zikr-jumma-management');
    })->name('admin.zikr-jumma-management');
    
    Route::get('/journal-analytics', function () {
        return view('admin.journal-analytics');
    })->name('admin.journal-analytics');
    
    Route::get('/scholars-management', function () {
        return view('admin.scholars-management');
    })->name('admin.scholars-management');
    
    Route::get('/mosques-management', function () {
        return view('admin.mosques-management');
    })->name('admin.mosques-management');
    
    Route::get('/makkah-live-management', function () {
        return view('admin.makkah-live-management');
    })->name('admin.makkah-live-management');
    
    Route::get('/ai-noor-management', function () {
        return view('admin.ai-noor-management');
    })->name('admin.ai-noor-management');
    
    // Legacy routes for backward compatibility
    Route::get('/scholars', function () {
        return view('admin.scholars');
    })->name('admin.scholars');
    
    Route::get('/community', function () {
        return view('admin.community');
    })->name('admin.community');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
