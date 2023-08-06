<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatController extends Controller
{

    public function getResponse(Request $request)
    {
        $message = $request->input('message');
        // Append the user's message to the conversation history
        if (strlen($message) < 3) {
            // early return a message asking for more information
            return response()->json(['response' => 'Please provide more information!', 'history' => session()->get('history')]);
        }
        $history = session()->get('history', []);
        $history[] = 'User: ' . $message;
        session()->put('history', $history);

        $prompt = $this->preparePrompt($history);

        $response = $this->getCompletion($prompt);
        $completion = trim($response['choices'][0]['text']);
        // Remove the instruction from the completion if it is present
        $completion = str_replace('AI:', '', $completion);
        $completion = trim($completion);  // trim again after the replacement

        // Append the AI's response to the conversation history
        $history = session()->get('history');
        $history[] = 'AI: ' . $completion;
        session()->put('history', $history);

        return response()->json(['response' => $completion, 'history' => $history]);
    }
    private function preparePrompt(array $history): string
    {
        // Define a separator for the exchanges
        $separator = "\n\n[end of message]\n\n";

        // Prepare the prompt
        $prompt = implode($separator, $history) . $separator;

        // Return the prompt
        return $prompt;
    }

    private function getCompletion($prompt)
    {
        $apiKey = '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';
        $url = 'https://api.openai.com/v1/engines/text-davinci-002/completions';

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $apiKey
        ];

        $postData = [
            'prompt' => $prompt,
            'max_tokens' => 150,  // increase if needed
            'temperature' => 0.5  // can be adjusted for more randomness
        ];

        $response = Http::withHeaders($headers)->post($url, $postData);

        if ($response->failed()) {
            abort($response->status(), $response->body());
        }

        return $response->json();
    }

    public function clearChat(Request $request)
    {
        $request->session()->forget('history');
        return response()->json(['status' => 'success']);
    }
}
