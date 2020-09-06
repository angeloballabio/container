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

    public function fornitoreSelezionato($fornitoreId){
        $this->selezionato = $fornitoreId;
    }

    public function render()
    {
        $fornitori = Fornitore::orderBy('soprannome','asc')->paginate(17);
        return view('livewire.tabella-fornitori',compact('fornitori'));
    }
}
