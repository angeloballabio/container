<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AzioniTrasportatori extends Component
{
    public function azzeraMaschera()
    {
        return redirect()->to('/gestione-destinatari');
    }

    public function ritornaIndietro()
    {
        return redirect()->to('/operazioni');
    }

    public function render()
    {
        return view('livewire.azioni-trasportatori');
    }
}
