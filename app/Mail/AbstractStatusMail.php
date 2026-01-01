<?php

namespace App\Mail;

use App\Models\AbstractForm;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AbstractStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public AbstractForm $abstract,
        public string $status
    ) {}

    public function build()
    {
        $subject = $this->status === 'accepte' 
            ? 'Votre abstract a été accepté' 
            : 'Votre abstract a été refusé';

        return $this->subject($subject)
                    ->view('emails.abstract-status');
    }
}