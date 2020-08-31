<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Articoli;

class DatiArticolo extends Component
{
    public $articolo_id = 0;

    protected $listeners = [
        'ArticoloSelezionato' => 'articoloSelezionato',
    ];

    public function articoloSelezionato($articoloId){
        $this->articolo_id = $articoloId;

    }
    public function render()
    {
        return view('livewire.dati-articolo', ['articolo_sel' => Articoli::where('id',$this->articolo_id)->get()->first()]);
    }
}
