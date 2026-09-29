<?php

namespace App\AI\DTO;

final readonly class ChatCompletion
{
    public function __construct(
        public string $content,
        public ?int $promptTokens = null,
        public ?int $completionTokens = null,
    ) {}
}
