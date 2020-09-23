<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Pezzi;
use App\Articoli;

class DatiPezzi extends Component
{
    public $pezzo_id = 0;
    public $articolo_id = 0;
    public $pezzi, $colli, $lordo, $netto, $valore, $codice_articolo, $ordine_id;

    protected $listeners = [
        'ArticoloSelezionato' => 'articoloSelezionato',
        'PezzoSelezionato' => 'pezzoSelezionato'
    ];

    public function articoloSelezionato($articoloId){
        $this->articolo_id = $articoloId;
    }

    public function pezzoSelezionato($pezzoId){
        $this->pezzo_id = $pezzoId;
    }

    public function mount($id)
    {
        $this->ordine_id = $id;
        /* $operazione = Operazione::where('id','=',$id)->get()->first();
        $fornitore = Fornitore::where('soprannome','=',$operazione->nome_fornitore)->get()->first();
        $this->fornitore_id = $fornitore->id; */
    }

    public function aggiungi()
    {
        $pezzo = new Pezzo();
        $pezzo->pezzi = $this->pezzi;
        $pezzo->colli = $this->colli;
        $pezzo->lordo = $this->lordo;
        $pezzo->netto = $this->netto;
        $pezzo->valore = $this->valore;
        $pezzo->codice_articolo = $this->codice_articolo;
        $pezzo->articolo_id = $this->articolo_id;
        $pezzo->ordine_id = $this->ordine_id;

    }

    public function render()
    {
        return view('livewire.dati-pezzi', ['pezzo' => Pezzi::where('id',$this->pezzo_id)->where('articolo_id',$this->articolo_id)->get()->first()]);
    }
}
