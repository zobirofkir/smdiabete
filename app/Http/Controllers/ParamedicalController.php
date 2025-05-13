<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParamedicalRequest;
use App\Models\Paramedical;
use Illuminate\Http\Request;

class ParamedicalController extends Controller
{
    public function index()
    {
        return view('pages.paramedical.paramedical');
    }

    public function store(ParamedicalRequest $request)
    {
        Paramedical::create($request->validated());
        return redirect()->route('paramedical.index')->with('success', 'Paramédical ajouté avec succès');
    }
}
