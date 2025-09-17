<?php

namespace App\Http\Controllers;

use App\Services\OpenAIService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class AINoorController extends Controller
{
    protected $openAIService;

    public function __construct(OpenAIService $openAIService)
    {
        $this->openAIService = $openAIService;
    }

    /**
     * Display the AI Noor interface
     */
    public function index(): View
    {
        return view('features.ai-noor');
    }

    /**
     * Generate AI response via AJAX
     */
    public function generate(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'prompt' => 'required|string|max:2000',
                'type' => 'sometimes|string|in:general,islamic,prayer,quran'
            ]);

            $prompt = $request->input('prompt');
            $type = $request->input('type', 'general');

            // Set a timeout for the request
            set_time_limit(60);

            // Generate response based on type
            switch ($type) {
                case 'islamic':
                    $result = $this->openAIService->generateIslamicContent($prompt);
                    break;
                case 'prayer':
                    $result = $this->openAIService->generatePrayerContent($prompt);
                    break;
                case 'quran':
                    $result = $this->openAIService->generateQuranContent($prompt);
                    break;
                default:
                    $result = $this->openAIService->generateResponse($prompt);
            }

            // Check if the result is successful
            if (!$result['success']) {
                \Log::error('AI Noor Error: ' . ($result['error'] ?? 'Unknown error'));
                return response()->json([
                    'success' => false,
                    'error' => 'I apologize, but I encountered an error. Please try again later.',
                    'response' => 'I apologize, but I encountered an error. Please try again later.'
                ]);
            }

            return response()->json($result);

        } catch (\Exception $e) {
            \Log::error('AI Noor Controller Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => 'I apologize, but I encountered an error. Please try again later.',
                'response' => 'I apologize, but I encountered an error. Please try again later.'
            ]);
        }
    }

    /**
     * Get AI Noor status
     */
    public function status(): JsonResponse
    {
        return response()->json([
            'configured' => $this->openAIService->isConfigured(),
            'model' => config('openai.model', 'gpt-3.5-turbo'),
            'max_tokens' => config('openai.max_tokens', 1000)
        ]);
    }

    /**
     * Handle search redirection from homepage
     */
    public function search(Request $request): View
    {
        $query = $request->input('q', '');
        
        if (empty($query)) {
            return view('features.ai-noor');
        }

        // Generate a response for the search query
        $result = $this->openAIService->generateIslamicContent($query);
        
        return view('features.ai-noor', [
            'searchQuery' => $query,
            'aiResponse' => $result['response'] ?? '',
            'aiSuccess' => $result['success'] ?? false
        ]);
    }
}
