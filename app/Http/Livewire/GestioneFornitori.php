<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GestioneFornitori extends Component
{
    /* public $operazione_id; */
    /* public $soprannome, $nome, $indirizzo, $cap, $luogo, $provincia, $numero,  */

    /* public function mount($id)
    {
        $this->operazione_id = $id;
    } */

    public function ritornaIndietro()
    {
        /* $id = $this->operazione_id; */
        return redirect()->to('/operazioni'/* , compact('id') */);
    }

    public function render()
    {
        return view('livewire.gestione-fornitori');
    }
}
