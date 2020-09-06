<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Valuta;
use Livewire\WithPagination;

class TabellaValute extends Component
{
    use WithPagination;

    public $selezionato = 0;

    protected $listeners = [
        'ValutaSelezionato' => 'valutaSelezionato',
    ];

    public function valutaSelezionato($valutaId){
        $this->selezionato = $valutaId;
    }

    public function render()
    {
        $valute = Valuta::orderBy('iso','asc')->paginate(26);
        return view('livewire.tabella-valute',compact('valute'));
    }
}
