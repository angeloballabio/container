<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Valuta;

class DatiValuta extends Component
{
    public $valuta_id;
    public $valuta;

    protected $listeners = [
        'ValutaSelezionato' => 'valutaSelezionato',
    ];

    public function valutaSelezionato($valutaId){
        $this->valuta_id = $valutaId;

        $valuta = Valuta::where('id',$this->valuta_id)->get()->first();
        if($valuta){
            $this->valuta = $valuta->iso;
        }
    }

    public function aggiungi()
    {
        $valuta = new Valuta();
        $valuta->iso = $this->valuta;
        $valuta->save();
        return redirect()->to('/gestione-valute');
    }

    public function modifica()
    {
        $valuta = Valuta::where('id',$this->valuta_id)->get()->first();

        /* $valuta = new valuta(); */
        $valuta->iso = $this->valuta;
        $valuta->save();
        return redirect()->to('/gestione-valute');
    }

    public function cancella()
    {
        $valuta = Valuta::where('id',$this->valuta_id)->get()->first();
        $valuta->delete();
        return redirect()->to('/gestione-valute');
    }

    public function render()
    {
        return view('livewire.dati-valuta');
    }
}
