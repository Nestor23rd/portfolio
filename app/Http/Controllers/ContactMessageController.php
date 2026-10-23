<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageAcknowledged;
use App\Mail\ContactMessageReceived;
use App\Models\ContactMessage;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
        if ($request->filled('website')) {
            return back()->with('contact_success', 'Merci pour votre envoi.');
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email:rfc', 'max:255'],
            'phone' => ['nullable', 'string', 'max:40'],
            'project_type' => ['nullable', 'string', 'max:80'],
            'message' => [
                'required',
                'string',
                'min:20',
                'max:5000',
                function (string $attribute, mixed $value, \Closure $fail): void {
                    if (! is_string($value)) {
                        return;
                    }

                    $wordCount = preg_match_all('/[\p{L}\p{N}]{2,}/u', $value, $words);

                    if ($wordCount === false || $wordCount < 3) {
                        $fail('Veuillez décrire votre demande en au moins trois mots.');
                    }
                },
            ],
        ], [
            'name.required' => 'Veuillez renseigner votre nom.',
            'name.max' => 'Votre nom ne peut pas dépasser :max caractères.',
            'email.required' => 'Veuillez renseigner votre adresse e-mail.',
            'email.email' => 'Veuillez renseigner une adresse e-mail valide.',
            'email.max' => 'Votre adresse e-mail ne peut pas dépasser :max caractères.',
            'phone.max' => 'Votre numéro ne peut pas dépasser :max caractères.',
            'project_type.max' => 'Le type de projet ne peut pas dépasser :max caractères.',
            'message.required' => 'Veuillez saisir votre message.',
            'message.min' => 'Votre message doit contenir au moins :min caractères.',
            'message.max' => 'Votre message ne peut pas dépasser :max caractères.',
        ]);

        $message = ContactMessage::create($validated);
        $recipient = SiteSetting::where('key', 'email')->value('value') ?: config('mail.from.address');
        $mailSent = true;
        try {
            Mail::to($recipient)->send(new ContactMessageReceived($message));
        } catch (\Throwable $exception) {
            $mailSent = false;
            Log::error('Impossible de mettre le message de contact en file email.', ['exception' => $exception]);
        }
        try {
            Mail::to($message->email)->send(new ContactMessageAcknowledged($message));
        } catch (\Throwable $exception) {
            Log::warning('Impossible d’envoyer l’accusé de réception au visiteur.', ['exception' => $exception]);
        }

        return back()->with('contact_success', $mailSent
            ? 'Votre message a bien été transmis par email.'
            : 'Votre message est enregistré dans le back-office, mais la notification email doit encore être configurée.');
    }
}
