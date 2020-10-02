<?php

namespace App\Http\Livewire;
use App\ResaFattura;
use Livewire\Component;
use Livewire\WithPagination;

class TabellaResa extends Component
{
    use WithPagination;

    public $selezionato = 0;

    protected $listeners = [
        'ResaSelezionato' => 'resaSelezionato',
    ];

    public function resaSelezionato($resaId){
        $this->selezionato = $resaId;
    }

    public function render()
    {
        $rese = ResaFattura::orderBy('iso','asc')->paginate(26);
        return view('livewire.tabella-resa',compact('rese'));
    }
}
