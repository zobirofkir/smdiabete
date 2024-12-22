<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Route::get('/actualities', function () { return view('pages.actualities.actualities'); });

Route::get('/abouts', function () { return view('pages.abouts.abouts'); });

Route::get('/events', function () { return view('pages.events.events'); });

Route::get('/login', function () { return view('pages.login.login'); });

Route::get('/contacts', function () { return view('pages.contacts.contacts'); });

Route::get('/galleries', function () { return view('pages.galleries.galleries'); });

Route::get('/inscriptions', function () { return view('pages.inscriptions.inscriptions'); });
