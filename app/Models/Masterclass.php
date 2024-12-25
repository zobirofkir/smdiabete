<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masterclass extends Model
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
    ];
}
