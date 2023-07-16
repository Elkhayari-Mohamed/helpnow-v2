<?php
function testOpenAI() {
    $url = 'https://api.openai.com/v1/engines/text-davinci-002/completions'; // Adjusted model name
    $apiKey = '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'; // Replace with your actual OpenAI API key
    $prompt = 'Translate the following English text to French: "{:Hello, world!}"';
    $maxTokens = 60;

    $postFields = json_encode([
        'prompt' => $prompt,
        'max_tokens' => $maxTokens
    ]);

    $curlHeaders = [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
    ];

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postFields,
        CURLOPT_HTTPHEADER => $curlHeaders,
    ]);

    $response = curl_exec($curl);

    if (curl_error($curl)) {
        echo 'Error:' . curl_error($curl);
    } else {
        echo $response;
    }

    curl_close($curl);
}

testOpenAI();
