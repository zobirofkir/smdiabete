<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'ville',
        'secteur',
        'phone',
        'email',
        'adresse',
        'objectif',
        'status',
    ];
}
