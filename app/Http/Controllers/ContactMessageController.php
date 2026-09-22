<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\SiteSetting;
use App\Mail\ContactMessageReceived;
use App\Mail\ContactMessageAcknowledged;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:255'],
            'project_type' => ['nullable', 'string', 'max:80'],
            'message' => ['required', 'string', 'min:20', 'max:5000'],
        ], [
            'name.required' => 'Veuillez renseigner votre nom.',
            'name.max' => 'Votre nom ne peut pas dépasser :max caractères.',
            'email.required' => 'Veuillez renseigner votre adresse e-mail.',
            'email.email' => 'Veuillez renseigner une adresse e-mail valide.',
            'email.max' => 'Votre adresse e-mail ne peut pas dépasser :max caractères.',
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
