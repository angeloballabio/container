<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compagnia extends Model
{
    protected $table = 'compagnie';
    protected $fillable = [
        'nome',
        'indirizzo_web',
        'contatto',
    ];
}
