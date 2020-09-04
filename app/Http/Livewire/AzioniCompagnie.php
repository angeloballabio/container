<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AzioniCompagnie extends Component
{
    public function azzeraMaschera()
    {
        return redirect()->to('/gestione-compagnie');
    }

    public function ritornaIndietro()
    {
        return redirect()->to('/operazioni');
    }

    public function render()
    {
        return view('livewire.azioni-compagnie');
    }
}
