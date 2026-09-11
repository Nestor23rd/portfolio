<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

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

        ContactMessage::create($validated);

        return back()->with('contact_success', 'Votre message a bien été transmis.');
    }
}
