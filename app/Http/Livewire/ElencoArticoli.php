<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Articoli;

class ElencoArticoli extends Component
{
    public $selezionato = 0;

    protected $listeners = [
        'ArticoloSelezionato' => 'articoloSelezionato',
    ];

    public function articoloSelezionato($articoloId){
        $this->selezionato = $articoloId;

    }

    public function render()
    {
        return view('livewire.elenco-articoli', ['articoli' => Articoli::paginate(19)]);
    }
}
