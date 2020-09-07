<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Articoli;

class ElencoArticoli extends Component
{
    public $selezionato = 0;
    public $ordine_id;

    protected $listeners = [
        'ArticoloSelezionato' => 'articoloSelezionato',
    ];

    public function articoloSelezionato($articoloId){
        $this->selezionato = $articoloId;
    }

    public function mount($id)
    {
        $this->ordine_id = $id;
    }

    public function render()
    {
        return view('livewire.elenco-articoli', ['articoli' => Articoli::where('ordine_id',$this->ordine_id)->paginate(19)]);
    }
}
