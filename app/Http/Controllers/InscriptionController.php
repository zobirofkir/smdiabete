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
        $inscription = Inscription::create($request->validated());

        return redirect()
            ->route('inscriptions.index')
            ->with('success', 'Inscription enregistrée avec succès.');
    }
}
