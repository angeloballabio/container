<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pezzi extends Model
{
    protected $table = 'pezzi';
    protected $fillable = [
        'pezzi',
        'colli',
        'lordo',
        'netto',
        'valore',
        'codice_articolo',
        'articolo_id',
        'ordine_id'
    ];

    public function articolo()
    {
        return $this->belongsTo(Articoli::class);
    }
}
