<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Consegna;
use Livewire\WithPagination;

class TabellaConsegna extends Component
{
    use WithPagination;

    public $selezionato = 0;

    protected $listeners = [
        'ConsegnaSelezionato' => 'consegnaSelezionato',
    ];

    public function consegnaSelezionato($consegnaId){
        $this->selezionato = $consegnaId;
    }

    public function render()
    {
        $consegne = Consegna::orderBy('soprannome','asc')->paginate(17);
        return view('livewire.tabella-consegna',compact('consegne'));
    }
}
