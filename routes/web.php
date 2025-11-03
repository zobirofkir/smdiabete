<?php

use App\Http\Controllers\AttestationController;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\InscriptionFormController;
use App\Http\Controllers\MasterclassController;
use App\Http\Controllers\ParamedicalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/actualities', function () {
    return view('pages.actualities.actualities');
});

Route::get('/abouts', function () {
    return view('pages.abouts.abouts');
});

Route::get('/events', function () {
    return view('pages.events.events');
});

Route::get('/login', function () {
    return view('pages.login.login');
});

Route::get('/contacts', function () {
    return view('pages.contacts.contacts');
});

Route::get('/galleries', function () {
    return view('pages.galleries.galleries');
});

/**
 * Inscription Routes
 */
// Route::get('/inscriptions', [InscriptionController::class, 'index'])->name('inscriptions.index');

/**
 * Inscription Routes
 */
// Route::post('/inscriptions/store', [InscriptionController::class, 'store'])->name('inscriptions.store');

/**
 * Masterclass Routes
 */
Route::get('/masterclass', [MasterclassController::class, 'index'])->name('masterclass.index');

/**
 * Masterclass Routes
 */
Route::post('/masterclass/store', [MasterclassController::class, 'store'])->name('masterclass.store');

/**
 * Videos Routes
 */
Route::get('/videos', function () {
    return view('pages.videos.videos');
});

/**
 * Sponsors Routes
 */
Route::get('/sponsors', function () {
    return view('pages.sponsors.sponsors');
});

/**
 * Members Routes
 */
Route::get('/members', function () {
    return view('pages.members.members');
});

/**
 * Declaration Routes
 */
Route::get('/declaration', function () {
    return view('pages.declaration.declaration');
})->name('declaration');

/**
 * press
 */
Route::get('/press', function() {
    return view('pages.press.press');
});

/**
 * Abstract Page
 */
Route::get('/communications', [CommunicationController::class, 'index'])->name('communications.index');

/**
 * Post Abstract
 */
Route::post('/communications/inscription', [CommunicationController::class, 'store'])->name('communications.store');

/**
 * para medical
 */
Route::get('/smdparamedical', [ParamedicalController::class, 'index'])->name('paramedical.index');

/**
 * store medical
 */
Route::post('/smdparamedical', [ParamedicalController::class, 'store'])->name('paramedical.store');

/**
 * Abstract Sended Successfully
 */
Route::get('/communications/success', function() {
    return view('pages.success.success');
})->name('communications.success');

/**
 * Attestation Routes
 */
Route::get('/attestations', [AttestationController::class, 'index'])->name("attestation.index");

/**
 * Store Abstract
 */
Route::post('/attestations/store', [AttestationController::class, 'store'])->name("attestation.store");

/**
 * Inscription Form
 */
Route::get('journée_Mondiale_du_Diabète_2025', [InscriptionFormController::class, 'index'])->name('inscription-form.index');
Route::post('journée_Mondiale_du_Diabète_2025', [InscriptionFormController::class, 'store'])->name('inscription-form.store');