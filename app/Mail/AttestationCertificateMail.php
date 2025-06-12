<?php

namespace App\Mail;

use App\Models\Attestation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AttestationCertificateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $attestation;
    protected $pdfContent;

    public function __construct(Attestation $attestation, $pdfContent)
    {
        $this->attestation = $attestation;
        $this->pdfContent = $pdfContent;
    }

    public function build()
    {
        return $this->subject('Votre attestation validée')
            ->view('emails.attestation_certificate')
            ->attachData($this->pdfContent, 'attestation.pdf', [
                'mime' => 'application/pdf',
            ]);
    }
}
