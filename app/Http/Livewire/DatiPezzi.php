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

    protected $rules = [
        'pezzi' => 'required|numeric|integer',
        'colli' => 'required|numeric|integer',
        'lordo' => 'required|numeric',
        'netto' => 'required|numeric',
        'valore' => 'required|numeric',
        'codice_articolo' => 'required|string|max:20',
    ];

    public function articoloSelezionato($articoloId){
        $this->articolo_id = $articoloId;
        $this->pezzo_id = 0;
            $this->pezzi = null;
            $this->colli = null;
            $this->lordo = null;
            $this->netto = null;
            $this->valore = null;
            $this->codice_articolo = null;
    }

    public function pezzoSelezionato($pezzoId){
        $this->pezzo_id = $pezzoId;

        $pezzo = Pezzi::where('id','=',$this->pezzo_id)->get()->first();
        if($pezzo)
        {
            $this->pezzi = $pezzo->pezzi;
            $this->colli = $pezzo->colli;
            $this->lordo = $pezzo->lordo;
            $this->netto = $pezzo->netto;
            $this->valore = $pezzo->valore;
            $this->codice_articolo = $pezzo->codice_articolo;
        }
    }

    public function mount($id)
    {
        $this->ordine_id = $id;

    }

    public function aggiungi()
    {
        $data = $this->validate($this->rules);

        $pezzo = new Pezzi();
        $pezzo->pezzi = $this->pezzi;
        $pezzo->colli = $this->colli;
        $pezzo->lordo = $this->lordo;
        $pezzo->netto = $this->netto;
        $pezzo->valore = $this->valore;
        $pezzo->codice_articolo = $this->codice_articolo;
        $pezzo->articolo_id = $this->articolo_id;
        $pezzo->ordine_id = $this->ordine_id;
        $pezzo->save();

        $i_pezzi = Pezzi::where('articolo_id','=',$this->articolo_id)->get()->all();
        $pezzi = 0;
        $colli = 0;
        $lordo = 0;
        $netto = 0;
        $valore = 0;
        foreach($i_pezzi as $pezzo){
            $pezzi = $pezzi + $pezzo->pezzi;
            $colli = $colli + $pezzo->colli;
            $lordo = $lordo + $pezzo->lordo;
            $netto = $netto + $pezzo->netto;
            $valore = $valore + $pezzo->valore;

        }
        $articolo = Articoli::where('id',$this->articolo_id)->get()->first();
        $articolo->tot_pezzi = $pezzi;
        $articolo->tot_colli = $colli;
        $articolo->tot_lordo = $lordo;
        $articolo->tot_netto = $netto;
        $articolo->tot_valore = $valore;
        $articolo->save();

        $id = $this->ordine_id;
        return redirect(route('distinta',compact('id')));
    }

    public function modifica()
    {
        $data = $this->validate($this->rules);

        $pezzo = Pezzi::where('id',$this->pezzo_id)->get()->first();

        $pezzo->pezzi = $this->pezzi;
        $pezzo->colli = $this->colli;
        $pezzo->lordo = $this->lordo;
        $pezzo->netto = $this->netto;
        $pezzo->valore = $this->valore;
        $pezzo->codice_articolo = $this->codice_articolo;
        $pezzo->articolo_id = $this->articolo_id;
        $pezzo->ordine_id = $this->ordine_id;
        $pezzo->save();

        $i_pezzi = Pezzi::where('articolo_id','=',$this->articolo_id)->get()->all();
        $pezzi = 0;
        $colli = 0;
        $lordo = 0;
        $netto = 0;
        $valore = 0;
        foreach($i_pezzi as $pezzo){
            $pezzi = $pezzi + $pezzo->pezzi;
            $colli = $colli + $pezzo->colli;
            $lordo = $lordo + $pezzo->lordo;
            $netto = $netto + $pezzo->netto;
            $valore = $valore + $pezzo->valore;

        }
        $articolo = Articoli::where('id',$this->articolo_id)->get()->first();
        $articolo->tot_pezzi = $pezzi;
        $articolo->tot_colli = $colli;
        $articolo->tot_lordo = $lordo;
        $articolo->tot_netto = $netto;
        $articolo->tot_valore = $valore;
        $articolo->save();

        $id = $this->ordine_id;

        return redirect(route('distinta',compact('id')));
    }

    public function cancella()
    {
        $pezzo = Pezzi::where('id',$this->pezzo_id)->get()->first();
        $pezzo->delete();
        $i_pezzi = Pezzi::where('articolo_id','=',$this->articolo_id)->get()->all();
        $pezzi = 0;
        $colli = 0;
        $lordo = 0;
        $netto = 0;
        $valore = 0;
        foreach($i_pezzi as $pezzo){
            $pezzi = $pezzi + $pezzo->pezzi;
            $colli = $colli + $pezzo->colli;
            $lordo = $lordo + $pezzo->lordo;
            $netto = $netto + $pezzo->netto;
            $valore = $valore + $pezzo->valore;

        }
        $articolo = Articoli::where('id',$this->articolo_id)->get()->first();
        $articolo->tot_pezzi = $pezzi;
        $articolo->tot_colli = $colli;
        $articolo->tot_lordo = $lordo;
        $articolo->tot_netto = $netto;
        $articolo->tot_valore = $valore;
        $articolo->save();
        $id = $this->ordine_id;
        return redirect(route('distinta',compact('id')));
    }

    public function render()
    {
        return view('livewire.dati-pezzi', ['pezzo' => Pezzi::where('id',$this->pezzo_id)->where('articolo_id',$this->articolo_id)->get()->first()]);
    }
}
