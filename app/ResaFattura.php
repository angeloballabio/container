<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResaFattura extends Model
{
    protected $table = 'resa_fattura';
    protected $fillable = [
        'iso',
        'descrizione',
    ];
}
