<?php

namespace App\Http\Controllers;

use App\Http\Requests\AbstractInscriptionRequest;
use App\Services\AbstractService;
use Illuminate\Http\RedirectResponse;

class AbstractInscriptionController extends Controller
{
    private AbstractService $abstractService;

    public function __construct(AbstractService $abstractService)
    {
        $this->abstractService = $abstractService;
    }

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
        $this->abstractService->storeAbstract(
            $request->validated(),
            $request->file('file')
        );

        return redirect()->route('abstract.success');
    }
}
