<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommunicationRequest;
use App\Services\CommunicationService;
use Illuminate\Http\RedirectResponse;

class CommunicationController extends Controller
{
    private CommunicationService $communicationService;

    public function __construct(CommunicationService $communicationService)
    {
        $this->communicationService = $communicationService;
    }

    /**
     * Abstract Page
     */
    public function index()
    {
        return view('pages.communications.communication');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CommunicationRequest $request
     * @return RedirectResponse
     */
    public function store(CommunicationRequest $request): RedirectResponse
    {
        $this->communicationService->storeAbstract(
            $request->validated(),
            $request->file('file')
        );

        return redirect()->route('communications.success');
    }
}
