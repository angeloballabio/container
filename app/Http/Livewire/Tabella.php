<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operazione;

class Tabella extends Component
{

    public function render()
    {
        return view('livewire.tabella',['operazioni' => Operazione::paginate(28)]);
    }
}
