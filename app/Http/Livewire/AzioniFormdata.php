<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operazione;

class AzioniFormdata extends Component
{
    public $ordine_id = 0;

    protected $listeners = [
        'OrdineSelezionato' => 'ordineSelezionato',
    ];

    public function ordineSelezionato($ordineId){
        $this->ordine_id = $ordineId;

    }

    public function azioneSelezionata(){

        $id = $this->ordine_id;
        return redirect(route('distinta', compact('id')));

    }

    public function render()
    {
        return view('livewire.azioni-formdata', ['operazione' => Operazione::where('id',$this->ordine_id)->get()->first()]);
    }
}
