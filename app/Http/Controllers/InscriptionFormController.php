<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscriptionFormRequest;
use App\Models\InscriptionForm;
use Illuminate\Http\Request;

class InscriptionFormController extends Controller
{
    /**
     * Store a new inscription
     */
    public function store(InscriptionFormRequest $request)
    {
        InscriptionForm::create($request->validated());
        return redirect()->back()->with('success', 'Inscription enregistrée avec succès.');
    }

}
