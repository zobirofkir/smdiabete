<?php

namespace App\Http\Controllers;

use App\Http\Requests\AbstractInscriptionRequest;
use App\Models\AbstractInscription;
use Illuminate\Http\RedirectResponse;

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
        AbstractInscription::create($request->validated());

        return redirect()->route('abstract.index')->with('success', 'Votre abstract a été envoyé avec succès.');
    }
}
