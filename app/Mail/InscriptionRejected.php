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
    public $fromEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Inscription $inscription, string $fromEmail)
    {
        $this->inscription = $inscription;
        $this->fromEmail = $fromEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->fromEmail)
            ->subject('Your Inscription is Rejected')
            ->view('emails.inscriptions.rejected')
            ->with([
                'firstname' => $this->inscription->firstname,
                'lastname' => $this->inscription->lastname,
            ]);
    }
}
