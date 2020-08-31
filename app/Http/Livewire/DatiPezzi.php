<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Pezzi;
use App\Articoli;

class DatiPezzi extends Component
{
    public $pezzo_id = 0;
    public $articolo_id = 0;

    protected $listeners = [
        'ArticoloSelezionato' => 'articoloSelezionato',
        'PezzoSelezionato' => 'pezzoSelezionato'
    ];

    public function articoloSelezionato($articoloId){
        $this->articolo_id = $articoloId;
    }

    public function pezzoSelezionato($pezzoId){
        $this->pezzo_id = $pezzoId;
    }

    public function render()
    {
        return view('livewire.dati-pezzi', ['pezzo' => Pezzi::where('id',$this->pezzo_id)->where('articolo_id',$this->articolo_id)->get()->first()]);
    }
}
