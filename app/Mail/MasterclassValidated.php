<?php

namespace App\Mail;

use App\Models\Masterclass;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MasterclassValidated extends Mailable
{
    use Queueable, SerializesModels;

    public $masterclass;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Masterclass $masterclass)
    {
        $this->masterclass = $masterclass;
    }

    /**
     * Build the message.
     *
     * @return \Illuminate\Mail\Mailable
     */
    public function build()
    {
        return $this->subject('Félicitations pour la validation de votre Masterclass!')
            ->view('emails.masterclass.validated')
            ->with([
                'username' => $this->masterclass->username,
            ]);
    }
}
