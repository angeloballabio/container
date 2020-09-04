<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Compagnia;
use Livewire\WithPagination;

class TabellaCompagnie extends Component
{
    use WithPagination;

    public $selezionato = 0;

    protected $listeners = [
        'CompagniaSelezionato' => 'compagniaSelezionato',
    ];

    public function compagniaSelezionato($compagniaId){
        $this->selezionato = $compagniaId;
    }

    public function render()
    {
        $compagnie = Compagnia::orderBy('nome','asc')->paginate(20);
        return view('livewire.tabella-compagnie',compact('compagnie'));
    }
}
