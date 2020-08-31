<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AzioniDistinta extends Component
{

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
