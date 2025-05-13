<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paramedical extends Model
{
    protected $fillable = [
        'username',
        'email',
        'responsable',
    ];
}
