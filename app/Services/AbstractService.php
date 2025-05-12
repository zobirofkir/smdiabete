<?php

namespace App\Services;

use App\Models\AbstractInscription;
use App\Mail\AbstractSubmissionConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\UploadedFile;

class AbstractService
{
    /**
     * Store a new abstract submission
     *
     * @param array $data
     * @param UploadedFile|null $file
     * @return AbstractInscription
     */
    public function storeAbstract(array $data, ?UploadedFile $file = null): AbstractInscription
    {
        if ($file) {
            $filePath = $file->store('abstracts', 'public');
            $data['file'] = $filePath;
        }

        $abstract = AbstractInscription::create($data);
        // $this->sendConfirmationEmails($abstract);

        return $abstract;
    }

    /**
     * Send confirmation emails to the submitter and admin
     *
     * @param AbstractInscription $abstract
     * @return void
     */
    // private function sendConfirmationEmails(AbstractInscription $abstract): void
    // {
    //     $recipients = ['abstract@smdiabete.org', $abstract->email];

    //     foreach ($recipients as $recipient) {
    //         Mail::to($recipient)->send(
    //             new AbstractSubmissionConfirmation($abstract->firstname, $abstract->lastname)
    //         );
    //     }
    // }
}
