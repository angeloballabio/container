<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operazione;
use App\Articoli;

class GeneraDistinta extends Component
{
    public $ordine_id = 0;
    public $totale_colli, $totale_pezzi, $totale_lordo, $totale_netto, $totale_valore;

    public function mount($id)
    {
        $this->ordine_id = $id;
        $articoli = Articoli::where('ordine_id','=',$id)->get()->all();
        $colli = 0;
        $pezzi = 0;
        $lordo = 0;
        $netto = 0;
        $valore = 0;
        foreach($articoli as $articolo){
            $colli = $colli + $articolo->tot_colli;
            $pezzi = $pezzi + $articolo->tot_pezzi;
            $lordo = $lordo + $articolo->tot_lordo;
            $netto = $netto + $articolo->tot_netto;
            $valore = $valore + $articolo->tot_valore;
        }
        $this->totale_colli = $colli;
        $this->totale_pezzi = $pezzi;
        $this->totale_lordo = $lordo;
        $this->totale_netto = $netto;
        $this->totale_valore = $valore;
    }

    public function render()
    {
        return view('livewire.genera-distinta', ['operazione' => Operazione::where('id', $this->ordine_id)->get()->first()]);
    }
}
