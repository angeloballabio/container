<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Pezzi;

class ElencoPezzi extends Component
{
    public $selezionato = 0;
    public $ordine_id, $articolo_id;

    protected $listeners = [
        'PezzoSelezionato' => 'pezzoSelezionato',
        'ArticoloSelezionato' => 'articoloSelezionato',
        'AggiuntoPezzo' => 'aggiunto_pezzo',
    ];


    public function pezzoSelezionato($pezzoId){
        $this->selezionato = $pezzoId;

    }

    public function articoloSelezionato($articoloId){
        $this->articolo_id = $articoloId;
        $this->selezionato = 0;
    }

    public function mount($id)
    {
        $this->ordine_id = $id;
        /* $operazione = Operazione::where('id','=',$id)->get()->first();
        $fornitore = Fornitore::where('soprannome','=',$operazione->nome_fornitore)->get()->first();
        $this->fornitore_id = $fornitore->id; */
    }

    public function aggiunto_pezzo()
    {
        $pezzi = Pezzi::where('articolo_id','=',$this->articolo_id)->paginate(19);
        return view('livewire.elenco-pezzi', compact('pezzi'));
    }

    public function render()
    {
        return view('livewire.elenco-pezzi', ['pezzi' => Pezzi::where('articolo_id','=',$this->articolo_id)->paginate(19)]);
    }
}
