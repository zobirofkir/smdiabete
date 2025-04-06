<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscriptionRequest;
use App\Models\Inscription;
use Illuminate\Support\Facades\Mail;
use App\Mail\InscriptionConfirmationMail;

class InscriptionController extends Controller
{
    public function index()
    {
        return view('pages.inscriptions.inscriptions');
    }

    public function store(InscriptionRequest $request)
    {
        $ribPdfPath = null;

        if ($request->hasFile('rib_pdf') && $request->file('rib_pdf')->isValid()) {
            $ribPdfPath = $request->file('rib_pdf')->store('rib_pdfs', 'public');
        }

        $validatedData = $request->validated();

        if (!isset($validatedData['departure_date'])) {
            $validatedData['departure_date'] = '0000-00-00';
        }

        if (!isset($validatedData['arrival_date'])) {
            $validatedData['arrival_date'] = '0000-00-00';
        }

        $inscription = Inscription::create([
            'laboratoire' => $request->input('laboratoire'),
            'rib_pdf_path' => $ribPdfPath,
            ...$validatedData,
        ]);

        Mail::mailer('smtp')
            ->to($inscription->email)
            ->send(new InscriptionConfirmationMail($inscription, 'contact@smdiabete.org'));

        return redirect()
            ->route('inscriptions.index')
            ->with('success', 'Votre inscription a été envoyée avec succès.');
    }
}
