<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operazione;

class Formdata extends Component
{
    public $ordine_id = 1;

    protected $listeners = [
        'OrdineSelezionato' => 'ordineSelezionato',
    ];

    public function ordineSelezionato($ordineId){
        $this->ordine_id = $ordineId;

    }

    public function render()
    {

        return view('livewire.formdata', ['operazione' => Operazione::where('id',$this->ordine_id)->get()->first()]);

    }
}
