<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AbstractSubmissionConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    public $lastname;

    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function build()
    {
        return $this->subject('Confirmation de réception de votre résumé')
            ->view('emails.abstract-confirmation');
    }
}
