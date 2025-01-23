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
        'paye',

        'sex',
        'arrival_date',
        'departure_date',
        'payment_method',
        'rib_pdf_path'
    ];
}
