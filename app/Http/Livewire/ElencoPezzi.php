<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Pezzi;

class ElencoPezzi extends Component
{
    public $selezionato = 0;

    protected $listeners = [
        'PezzoSelezionato' => 'pezzoSelezionato',
    ];

    public function pezzoSelezionato($pezzoId){
        $this->selezionato = $pezzoId;

    }

    public function render()
    {
        return view('livewire.elenco-pezzi', ['pezzi' => Pezzi::paginate(19)]);
    }
}
