<?php

namespace App\Services;

use OpenAI\Laravel\Facades\OpenAI;
use Exception;

class OpenAIService
{
    protected $model;
    protected $maxTokens;
    protected $temperature;

    public function __construct()
    {
        $this->model = config('openai.model', 'gpt-3.5-turbo');
        $this->maxTokens = config('openai.max_tokens', 1000);
        $this->temperature = config('openai.temperature', 0.7);
    }

    /**
     * Generate a response using OpenAI
     */
    public function generateResponse(string $prompt, string $context = ''): array
    {
        try {
            // Check if API key is configured
            if (!$this->isConfigured()) {
                return [
                    'success' => false,
                    'error' => 'OpenAI API key not configured',
                    'response' => 'I apologize, but I am currently unable to process your request. Please try again later.'
                ];
            }

            $systemPrompt = $this->getSystemPrompt($context);
            
            // Add timeout to the request
            $response = OpenAI::chat()->create([
                'model' => $this->model,
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => $systemPrompt
                    ],
                    [
                        'role' => 'user',
                        'content' => $prompt
                    ]
                ],
                'max_tokens' => min($this->maxTokens, 500), // Reduce tokens for faster response
                'temperature' => $this->temperature,
            ], [
                'timeout' => 30, // 30 second timeout
            ]);

            $content = $response['choices'][0]['message']['content'] ?? '';
            
            if (empty($content)) {
                return [
                    'success' => false,
                    'error' => 'Empty response from OpenAI',
                    'response' => 'I apologize, but I received an empty response. Please try again with a different question.'
                ];
            }

            return [
                'success' => true,
                'response' => $content,
                'usage' => $response['usage'] ?? null
            ];
        } catch (Exception $e) {
            \Log::error('OpenAI Service Error: ' . $e->getMessage());
            return [
                'success' => false,
                'error' => $e->getMessage(),
                'response' => 'I apologize, but I am currently unable to process your request. Please try again later.'
            ];
        }
    }

    /**
     * Generate Islamic content specifically
     */
    public function generateIslamicContent(string $prompt): array
    {
        $islamicContext = "You are AI Noor, an Islamic AI assistant designed to help Muslims with their spiritual journey. 
        You provide accurate, respectful, and helpful information about Islam, including:
        - Quranic verses and their meanings
        - Hadith and Islamic teachings
        - Prayer guidance and Islamic practices
        - Islamic history and scholars
        - Spiritual advice and motivation
        - Halal lifestyle guidance
        
        Always respond with Islamic wisdom, cite sources when appropriate, and maintain a respectful, knowledgeable tone.
        If asked about non-Islamic topics, politely redirect to Islamic guidance or general helpful advice within Islamic principles.";

        return $this->generateResponse($prompt, $islamicContext);
    }

    /**
     * Generate prayer-related content
     */
    public function generatePrayerContent(string $prompt): array
    {
        $prayerContext = "You are AI Noor specializing in Islamic prayer guidance. Help with:
        - Prayer times and calculations
        - Prayer methods and positions
        - Duas and supplications
        - Prayer etiquette and Sunnah
        - Qibla direction guidance
        - Islamic calendar information
        
        Provide accurate, practical guidance for Muslims seeking to improve their prayer life.";

        return $this->generateResponse($prompt, $prayerContext);
    }

    /**
     * Generate Quran-related content
     */
    public function generateQuranContent(string $prompt): array
    {
        $quranContext = "You are AI Noor specializing in Quranic guidance. Help with:
        - Quranic verses and their meanings
        - Tafseer (interpretation) of verses
        - Quranic stories and lessons
        - Memorization techniques
        - Quranic Arabic guidance
        - Spiritual lessons from the Quran
        
        Always provide accurate translations and interpretations, citing reputable sources when possible.";

        return $this->generateResponse($prompt, $quranContext);
    }

    /**
     * Get system prompt based on context
     */
    private function getSystemPrompt(string $context = ''): string
    {
        if ($context) {
            return $context;
        }

        return "You are AI Noor, a helpful Islamic AI assistant. Provide accurate, respectful, and helpful responses 
        about Islam and general topics. Always maintain a positive, supportive tone and offer practical guidance.";
    }

    /**
     * Check if OpenAI is properly configured
     */
    public function isConfigured(): bool
    {
        return !empty(config('openai.api_key'));
    }
}
