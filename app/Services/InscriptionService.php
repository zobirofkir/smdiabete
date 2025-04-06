<?php

namespace App\Services;

use App\Models\Inscription;
use Illuminate\Support\Facades\Mail;
use App\Mail\InscriptionConfirmationMail;

class InscriptionService
{
    public function handleInscription(array $validatedData, $ribPdfPath = null): Inscription
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
         * Create the inscription
         */
        $inscription = Inscription::create([
            'laboratoire' => $validatedData['laboratoire'],
            'rib_pdf_path' => $ribPdfPath,
            ...$validatedData,
        ]);

        /**
         * Send confirmation email
         */
        $this->sendConfirmationEmail($inscription);

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
}
