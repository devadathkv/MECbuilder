<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeminiService
{
    protected $apiKey;
    protected $baseUrl = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro-1.5:generateContent';

    public function __construct()
    {
        $this->apiKey = env('GEMINI_API_KEY');
    }

    public function analyzeResume($resumeContent)
    {
        try {
            $response = Http::post($this->baseUrl . '?key=' . $this->apiKey, [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => "Analyze this resume and provide clear, actionable suggestions for improvement:\n\n" . $resumeContent]
                        ]
                    ]
                ]
            ]);

            if ($response->successful()) {
                return $response->json()['candidates'][0]['content']['parts'][0]['text'] ?? 'No suggestions returned.';
            } else {
                return "❌ Error: Gemini API responded with {$response->status()} - {$response->body()}";
            }
        } catch (\Exception $e) {
            return "❌ Error: Could not get suggestions (Exception: " . $e->getMessage() . ")";
        }
    }
}
