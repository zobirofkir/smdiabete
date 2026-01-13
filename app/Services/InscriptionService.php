<?php

namespace App\Services;

use App\Models\Inscription;
use Illuminate\Support\Facades\Mail;
use App\Mail\InscriptionConfirmationMail;
use App\Mail\InscriptionRejectedMail;

class InscriptionService
{
    public function handleInscription(array $validatedData, ?string $ribPdfPath = null): Inscription
    {
        /**
         * Set default dates if not provided
         */
        if (!isset($validatedData['departure_date'])) {
            $validatedData['departure_date'] = '0000-00-00';
        }

        if (!isset($validatedData['arrival_date'])) {
            $validatedData['arrival_date'] = '0000-00-00';
        }

        /**
         * Set payment method message only if payment_choice is 'no'
         */
        if (!isset($validatedData['payment_method']) && isset($validatedData['payment_choice']) && $validatedData['payment_choice'] === 'no') {
            $validatedData['payment_method'] = 'L\'utilisateur vous contactera à ce numéro (0762011226)';
        }

        /**
         * Create the inscription
         */
        $inscription = Inscription::create([
            'laboratoire' => $validatedData['laboratoire'] ?? null,
            'rib_pdf_path' => $ribPdfPath,
            ...$validatedData,
        ]);

        /**
         * Send appropriate email based on payment choice
         */
        if (isset($validatedData['payment_choice']) && $validatedData['payment_choice'] === 'no') {
            $this->sendRejectedEmail($inscription);
        } else {
            $this->sendConfirmationEmail($inscription);
        }

        return $inscription;
    }

    /**
     * Send confirmation email
     *
     * @param Inscription $inscription
     * @return void
     */
    private function sendConfirmationEmail(Inscription $inscription): void
    {
        Mail::mailer('smtp')
            ->to($inscription->email)
            ->send(new InscriptionConfirmationMail($inscription, 'contact@smdiabete.org'));
    }

    /**
     * Send rejected email
     *
     * @param Inscription $inscription
     * @return void
     */
    private function sendRejectedEmail(Inscription $inscription): void
    {
        Mail::mailer('smtp')
            ->to($inscription->email)
            ->send(new InscriptionRejectedMail($inscription, 'contact@smdiabete.org'));
    }
}
