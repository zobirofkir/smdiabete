<?php

namespace App\Http\Controllers;

use App\Http\Requests\MasterclassRequest;
use App\Models\Masterclass;
use Illuminate\Http\Request;

class MasterclassController extends Controller
{
    public function index()
    {
        return view('pages.masterclass.masterclass');
    }

    public function store(MasterclassRequest $request)
    {
        $masterclass = Masterclass::create($request->validated());

        return redirect()
            ->route('masterclass.index')
            ->with('success', 'Masterclass enregistrée avec succès.');
    }
}
