<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AzioniDistinta extends Component
{

    public $ordine_id;


    public function mount($id)
    {
        $this->ordine_id = $id;
    }

    public function stampa_distinta()
    {
        /* dd('stampo la distinta'); */
        $id = $this->ordine_id;
        if($id)
        {
            return redirect(route('stampa.distinta',['id' => $id]));
        }
    }

    public function ritornaIndiero()
    {
        /* dd('sono qui'); */
        return redirect(route('operazioni'));
    }

    public function render()
    {
        return view('livewire.azioni-distinta');
    }
}
