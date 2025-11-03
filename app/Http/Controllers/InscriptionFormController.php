<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscriptionFormRequest;
use App\Models\InscriptionForm;
use Illuminate\Http\Request;

class InscriptionFormController extends Controller
{
    /**
     * Inscription Form
     */
    public function index()
    {
        return view('inscription-form.inscription-form');
    }

    /**
     * Store a new inscription
     */
    public function store(InscriptionFormRequest $request)
    {
        InscriptionForm::create($request->validated());
        return redirect()->back()->with('success', 'Inscription enregistrée avec succès.');
    }

}
