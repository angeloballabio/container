<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operazione;

class GeneraDistinta extends Component
{
    public $ordine_id;

    protected $listeners = [
        'FareDistinta' => 'distinta',
    ];

    public function distinta($ordineId){
        $this->ordine_id = $ordineId;
        dd($ordineId);
    }

    public function render()
    {
        /* $operazione = Operazione::where('id','=', $ordine_id)->get()->first(); */
        return view('livewire.genera-distinta', ['operazione' => Operazione::where('id', $this->ordine_id)->get()->first()]);
    }
}
