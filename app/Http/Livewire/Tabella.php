<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operazione;
use Livewire\WithPagination;

class Tabella extends Component
{
    use WithPagination;

    public $selezionato = 0;


    protected $listeners = [
        'OrdineSelezionato' => 'tabellaSelezionato',
        'AggiornaOperazione' => 'aggiorna_tabella',
    ];

    public function tabellaSelezionato($ordineId){
        $this->selezionato = $ordineId;

    }

    public function aggiorna_tabella()
    {
        $operazioni = Operazione::orderBy('data_arrivo_nave','desc')->paginate(23);
        return view('livewire.tabella',compact('operazioni'));
    }

    public function render()
    {
        return view('livewire.tabella',['operazioni' => Operazione::orderBy('data_arrivo_nave','desc')->paginate(23)]);
    }
}
