<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operazione extends Model
{
    //
    protected $table = 'operazioni';
    protected $fillable = [
        'nr_fattura',
        'data_fattura',
        'nome_fornitore',
        'valuta',
        'numero_pratica',
        'compagnia_aeronavale',
        'data_arrivo_nave',
        'nome_nave',
        'numero_obl',
        'container_nr',
        'cartoni',
        'lordo_obl',
        'cubatura',
        'data_carico',
        'destinatario_obl',
        'trasportatore',
        'consegna',
        'data_pratica',
        'totale_diritti',
        'totale_iva',
        'richiede_sanitari',
        'numero_sanitari',
        'richiede_ce',
        'richiede_conformita',
        'dogana_t1',
        'tipo_container',
        'sigillo'
    ];
}
