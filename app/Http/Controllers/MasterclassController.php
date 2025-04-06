<?php

namespace App\Http\Controllers;

use App\Http\Requests\MasterclassRequest;
use App\Services\MasterclassService;

class MasterclassController extends Controller
{
    protected $masterclassService;

    public function __construct(MasterclassService $masterclassService)
    {
        $this->masterclassService = $masterclassService;
    }

    public function index()
    {
        return view('pages.masterclass.masterclass');
    }

    public function store(MasterclassRequest $request)
    {
        $this->masterclassService->storeMasterclass($request->validated());

        return redirect()
            ->route('masterclass.index')
            ->with('success', 'Masterclass enregistrée avec succès.');
    }
}
