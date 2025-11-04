<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscriptionFormRequest;
use App\Models\InscriptionForm;
use Illuminate\Http\Request;

class InscriptionFormController extends Controller
{
    /**
     * Store a new inscription
     */
    public function store(InscriptionFormRequest $request)
    {
        $data = $request->validated();
        
        // Handle custom status
        if ($data['statut'] === 'autre' && !empty($data['custom_status'])) {
            $data['statut'] = $data['custom_status'];
        }
        
        // Remove custom_status from data as it's not in the database
        unset($data['custom_status']);
        
        InscriptionForm::create($data);
        
        return redirect()->back()->with('success', 'Inscription enregistrée avec succès.');
    }

}
