<?php

namespace App\Http\Controllers;

use App\Http\Requests\AbstractFormRequest;
use App\Models\AbstractForm;
use Illuminate\Http\Request;

class AbstractController extends Controller
{
    /**
     * Home Page
     */
    public function index()
    {
        return view("pages.abstracts.abstracts");
    }

    /**
     * Store Abstract
     */
    public function store(AbstractFormRequest $request)
    {
        $validatedData = $request->validated();
        
        if ($request->hasFile('abstract_file')) {
            $validatedData['abstract_file'] = $request->file('abstract_file')->store('abstracts', 'public');
        }
        
        AbstractForm::create($validatedData);
        
        return redirect()->back()->with('success', 'Abstract submitted successfully!');
    }
}
