<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
        'secteur',
        'type',
        'specialite',
        'ville',
        'attendance_status',
        'laboratoire_status',
        'sex',
        'departure_date',
        'arrival_date',
        'payment_method',
        'rib_pdf_path',
        'status',
        'laboratoire',
        'other_laboratoire',
        'other_specialite'
    ];
}
