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
        'Aggiunto' => 'aggiunto',
    ];

    public function articoloSelezionato($articoloId){
        $this->selezionato = $articoloId;
    }

    public function mount($id)
    {
        $this->ordine_id = $id;
    }

    public function aggiunto()
    {
        $articoli = Articoli::where('ordine_id','=',$this->ordine_id)->paginate(19);
        return view('livewire.elenco-articoli', compact('articoli'));

    }

    public function render()
    {
        return view('livewire.elenco-articoli', ['articoli' => Articoli::where('ordine_id',$this->ordine_id)->paginate(19)]);
    }
}
