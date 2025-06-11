<?php

namespace App\Http\Controllers;

use App\Http\Requests\AttestationRequest;
use App\Models\Attestation;
use Illuminate\Http\Request;

class AttestationController extends Controller
{
    public function index()
    {
        return view('pages.attestations.index');
    }

    public function store(AttestationRequest $request)
    {
        Attestation::create($request->validated());
        return redirect()->back()->with('success', 'Attestation ajoutée avec succès');
    }
}
