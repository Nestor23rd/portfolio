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
            'email' => ['required', 'email:rfc,dns', 'max:255'],
            'project_type' => ['nullable', 'string', 'max:80'],
            'message' => ['required', 'string', 'min:20', 'max:5000'],
        ]);

        ContactMessage::create($validated);

        return back()->with('contact_success', 'Votre message a bien été transmis.');
    }
}
