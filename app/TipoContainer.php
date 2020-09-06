<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoContainer extends Model
{
    protected $table = 'tipo_container';
    protected $fillable = [
        'tipo',
    ];
}
