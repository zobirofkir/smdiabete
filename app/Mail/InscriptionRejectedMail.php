<?php

namespace App\Mail;

use App\Models\Inscription;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InscriptionRejectedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Inscription $inscription,
        public string $fromEmail
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Demande d\'inscription au 2ème congrès de la SMD 2025',
            from: $this->fromEmail,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.inscription-rejected',
            with: [
                'inscription' => $this->inscription,
            ],
        );
    }
}
