<?php

namespace App\Http\Controllers;

use App\AI\NestorAssistant;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Throwable;

final class NestorAiController extends Controller
{
    public function __invoke(Request $request, NestorAssistant $assistant): JsonResponse
    {
        $validated = $request->validate([
            'conversation_id' => ['required', 'uuid'],
            'message' => ['required', 'string', 'max:'.($request->input('mode') === 'job' ? 5000 : 1500)],
            'mode' => ['nullable', Rule::in(['chat', 'recruiter', 'job', 'developer', 'project'])],
            'project_slug' => ['nullable', 'required_if:mode,project', 'string', Rule::exists('projects', 'slug')->where('is_published', true)],
        ]);

        $conversationId = $validated['conversation_id'];
        $conversation = $request->session()->get('nestor_ai.conversation', []);
        $history = is_array($conversation) && ($conversation['id'] ?? null) === $conversationId
            ? ($conversation['messages'] ?? [])
            : [];
        $mode = $validated['mode'] ?? 'chat';
        $question = trim($validated['message']);

        try {
            $result = $assistant->answer($question, $history, $mode, $validated['project_slug'] ?? null);
        } catch (Throwable $exception) {
            Log::warning('Nestor AI request failed.', [
                'exception' => $exception::class,
                'mode' => $mode,
            ]);

            return response()->json([
                'message' => app()->getLocale() === 'fr'
                    ? 'Nestor AI est momentanément indisponible. Vous pouvez continuer à parcourir le portfolio ou contacter Nestor directement.'
                    : 'Nestor AI is temporarily unavailable. You can keep exploring the portfolio or contact Nestor directly.',
                'contact_url' => route('contact'),
            ], 503);
        }

        $history[] = ['role' => 'user', 'content' => $question];
        $history[] = ['role' => 'assistant', 'content' => $result['answer']];
        $request->session()->put('nestor_ai.conversation', [
            'id' => $conversationId,
            'messages' => array_slice($history, -8),
        ]);

        return response()->json([
            'answer' => $result['answer'],
            'sources' => $result['sources'],
            'conversation_id' => $conversationId,
        ]);
    }
}
