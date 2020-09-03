<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Fornitore;
use Livewire\WithPagination;

class TabellaFornitori extends Component
{
    use WithPagination;

    public $selezionato = 0;

    protected $listeners = [
        'FornitoreSelezionato' => 'fornitoreSelezionato',
    ];

    public function fornitoreSelezionato($ordineId){
        $this->selezionato = $ordineId;
    }

    public function render()
    {
        $fornitori = Fornitore::orderBy('nome','asc')->paginate(10);
        return view('livewire.tabella-fornitori',compact('fornitori'));
    }
}
