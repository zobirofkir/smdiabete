<?php

namespace App\Http\Controllers;

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
}
