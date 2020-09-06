<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valuta extends Model
{
    protected $table = 'valute';
    protected $fillable = [
        'iso',
    ];
}
