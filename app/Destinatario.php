<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinatario extends Model
{
    protected $table = 'destinatari';
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
