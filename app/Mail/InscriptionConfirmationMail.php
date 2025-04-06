<?php

namespace App\Mail;

use App\Models\Inscription;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InscriptionConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $inscription;
    public $fromAddress;

    /**
     * Create a new message instance.
     */
    public function __construct(Inscription $inscription, string $fromAddress = null)
    {
        $this->inscription = $inscription;
        $this->fromAddress = $fromAddress;
    }

    public function build()
    {
        $mail = $this->subject('Confirmation de votre inscription au 2 ème congrès de la SMD 2025')
            ->view('emails.inscriptions.confirmation');

        if ($this->fromAddress) {
            $mail->from($this->fromAddress, config('app.name'));
        }

        return $mail;
    }
}
