<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Pezzi;

class ElencoPezzi extends Component
{
    public $selezionato = 0;
    public $ordine_id;

    protected $listeners = [
        'PezzoSelezionato' => 'pezzoSelezionato',
    ];

    public function pezzoSelezionato($pezzoId){
        $this->selezionato = $pezzoId;

    }

    public function mount($id)
    {
        $this->ordine_id = $id;
        /* $operazione = Operazione::where('id','=',$id)->get()->first();
        $fornitore = Fornitore::where('soprannome','=',$operazione->nome_fornitore)->get()->first();
        $this->fornitore_id = $fornitore->id; */
    }

    public function render()
    {
        return view('livewire.elenco-pezzi', ['pezzi' => Pezzi::paginate(19)]);
    }
}
