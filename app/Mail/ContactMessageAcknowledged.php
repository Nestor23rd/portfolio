<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailable;

class ContactMessageAcknowledged extends Mailable
{
    public function __construct(public ContactMessage $contactMessage) {}

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Votre message a bien été reçu — Nestor KPADJA');
    }

    public function content(): Content
    {
        return new Content(view: 'emails.contact-acknowledgement');
    }
}
