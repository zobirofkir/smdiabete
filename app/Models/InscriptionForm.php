<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InscriptionForm extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'mail',
        'telephone',
        'statut'
    ];

}
