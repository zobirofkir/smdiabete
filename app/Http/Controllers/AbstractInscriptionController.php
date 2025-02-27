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
        $data = $request->validated();

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('abstracts', 'public');
            $data['file'] = $filePath;
        }

        AbstractInscription::create($data);

        return redirect()->route('abstract.success');
    }

}
