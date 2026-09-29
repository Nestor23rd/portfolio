<?php

namespace App\AI\Contracts;

use App\AI\DTO\ChatCompletion;

interface ChatProvider
{
    /**
     * @param  list<array{role: string, content: string}>  $messages
     */
    public function complete(array $messages): ChatCompletion;
}
