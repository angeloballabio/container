<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AzioniConsegna extends Component
{
    public function azzeraMaschera()
    {
        return redirect()->to('/gestione-consegna');
    }

    public function ritornaIndietro()
    {
        return redirect()->to('/operazioni');
    }

    public function render()
    {
        return view('livewire.azioni-consegna');
    }
}
