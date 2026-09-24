<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class LibreTranslate
{
    public function translate(string $text, string $targetLocale): string
    {
        $text = trim($text);
        $baseUrl = rtrim((string) config('services.libretranslate.url'), '/');

        if ($text === '' || $baseUrl === '' || $targetLocale !== 'en') {
            return $text;
        }

        $cacheKey = 'libretranslate:'.hash('sha256', $targetLocale."\0".$text);
        $cachedTranslation = Cache::get($cacheKey);

        if (is_string($cachedTranslation)) {
            return $cachedTranslation;
        }

        try {
            $response = Http::connectTimeout(3)
                ->timeout((int) config('services.libretranslate.timeout', 15))
                ->post($baseUrl.'/translate', array_filter([
                    'q' => $text,
                    'source' => 'fr',
                    'target' => $targetLocale,
                    'format' => 'text',
                    'api_key' => config('services.libretranslate.api_key'),
                ], static fn (mixed $value): bool => $value !== null && $value !== ''))
                ->throw();

            $translation = $response->json('translatedText');

            if (is_string($translation) && trim($translation) !== '') {
                Cache::forever($cacheKey, $translation);

                return $translation;
            }
        } catch (Throwable $exception) {
            Log::warning('LibreTranslate could not translate content.', [
                'exception' => $exception::class,
            ]);
        }

        return $text;
    }
}
