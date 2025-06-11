<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttestationController extends Controller
{
    public function index()
    {
        return view('pages.attestations.index');
    }

    
}
