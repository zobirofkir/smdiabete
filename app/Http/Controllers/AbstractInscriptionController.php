<?php

namespace App\Http\Controllers;

use App\Http\Requests\AbstractInscriptionRequest;
use App\Mail\AbstractSubmissionConfirmation;
use App\Models\AbstractInscription;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class AbstractInscriptionController extends Controller
{
    /**
     * Abstract Page
     */
    public function index()
    {
        return view('pages.abstract.abstract');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AbstractInscriptionRequest $request
     * @return RedirectResponse
     */
    public function store(AbstractInscriptionRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('abstracts', 'public');
            $data['file'] = $filePath;
        }

        $abstract = AbstractInscription::create($data);

        $recipients = ['abstract@smdiabete.org', $abstract->email];

        foreach ($recipients as $recipient) {
            Mail::to($recipient)->send(
                new AbstractSubmissionConfirmation($abstract->firstname, $abstract->lastname)
            );
        }

        return redirect()->route('abstract.success');
    }

}
