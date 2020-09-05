<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trasportatore extends Model
{
    protected $table = 'trasportatori';
    protected $fillable = [
        'soprannome',
        'nome',
        'indirizzo',
        'cap',
        'luogo',
        'provincia',
        'numero',
        'stato',
        'telefono1',
        'telefono2',
        'mobile',
        'fax',
        'mail',
        'piva'
    ];
}
