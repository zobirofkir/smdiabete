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
        AbstractForm::create(
            $request->validated()
        );
        return redirect()->back()->with('success', 'Abstract submitted successfully!');
    }
}
