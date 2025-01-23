<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscriptionRequest;
use App\Models\Inscription;
use Illuminate\Support\Facades\Storage;

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

        $inscription = Inscription::create(array_merge(
            $request->validated(),
            ['rib_pdf_path' => $ribPdfPath]
        ));

        return redirect()
            ->route('inscriptions.index')
            ->with('success', 'Inscription enregistrée avec succès.');
    }
}
