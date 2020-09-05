<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consegna extends Model
{
    protected $table = 'luoghi_consegna';
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
