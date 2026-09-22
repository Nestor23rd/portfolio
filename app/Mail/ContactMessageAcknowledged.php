<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;

class ContactMessageAcknowledged extends Mailable
{
    public function __construct(public ContactMessage $contactMessage) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(config('mail.from.address'), config('mail.from.name')),
            replyTo: [new Address(config('mail.from.address'), config('mail.from.name'))],
            subject: 'Confirmation de réception de votre message — Nestor KPADJA',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-acknowledgement',
            text: 'emails.contact-acknowledgement-text',
        );
    }
}
