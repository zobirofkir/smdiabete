<?php

namespace App\Mail;

use App\Models\Inscription;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InscriptionRejected extends Mailable
{
    use Queueable, SerializesModels;

    public $inscription;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Inscription $inscription)
    {
        $this->inscription = $inscription;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Inscription is Rejected')
            ->view('emails.inscriptions.rejected')
            ->with([
                'firstname' => $this->inscription->firstname,
                'lastname' => $this->inscription->lastname,
            ]);
    }
}
