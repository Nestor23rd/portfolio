<?php

namespace App\AI\Providers;

use App\AI\Contracts\ChatProvider;
use App\AI\DTO\ChatCompletion;
use Illuminate\Support\Facades\Http;
use RuntimeException;
use Throwable;

final class AsiOneChatProvider implements ChatProvider
{
    public function complete(array $messages): ChatCompletion
    {
        $apiKey = (string) config('services.asi_one.api_key');

        if ($apiKey === '') {
            throw new RuntimeException('ASI:One is not configured.');
        }

        try {
            $response = Http::baseUrl(rtrim((string) config('services.asi_one.base_url'), '/'))
                ->acceptJson()
                ->asJson()
                ->withToken($apiKey)
                ->connectTimeout(3)
                ->timeout((int) config('services.asi_one.timeout', 18))
                ->post('/chat/completions', [
                    'model' => config('services.asi_one.model', 'asi1-mini'),
                    'messages' => $messages,
                    'temperature' => 0.2,
                    'max_tokens' => (int) config('services.asi_one.max_tokens', 700),
                    'stream' => false,
                ])
                ->throw();
        } catch (Throwable $exception) {
            throw new RuntimeException('ASI:One request failed.', previous: $exception);
        }

        $content = $response->json('choices.0.message.content');

        if (! is_string($content) || trim($content) === '') {
            throw new RuntimeException('ASI:One returned an empty completion.');
        }

        return new ChatCompletion(
            content: trim($content),
            promptTokens: is_numeric($response->json('usage.prompt_tokens')) ? (int) $response->json('usage.prompt_tokens') : null,
            completionTokens: is_numeric($response->json('usage.completion_tokens')) ? (int) $response->json('usage.completion_tokens') : null,
        );
    }
}
