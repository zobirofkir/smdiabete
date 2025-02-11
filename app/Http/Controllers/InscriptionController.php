<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscriptionRequest;
use App\Models\Inscription;

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

        $inscription = Inscription::create([
            'laboratoire' => $request->input('laboratoire'),
            'rib_pdf_path' => $ribPdfPath,
            ...$request->validated(),
        ]);

        return redirect()
            ->route('inscriptions.index')
            ->with('success', 'Votre inscription a été envoyée avec succès.');
    }
}
