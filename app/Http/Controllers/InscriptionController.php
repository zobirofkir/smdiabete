<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscriptionRequest;
use App\Services\InscriptionService;

class InscriptionController extends Controller
{
    protected $inscriptionService;

    public function __construct(InscriptionService $inscriptionService)
    {
        $this->inscriptionService = $inscriptionService;
    }

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
        $this->inscriptionService->handleInscription($validatedData, $ribPdfPath);

        return redirect()
            ->route('inscriptions.index')
            ->with('success', 'Votre inscription a été envoyée avec succès.');
    }
}
