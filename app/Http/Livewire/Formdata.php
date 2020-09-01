<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operazione;

class Formdata extends Component
{
    public $ordine_id = 0;
    public $fattura_nr, $data_fattura, $fornitore, $valuta, $compagnia_navale, $data_attivo_nave, $nome_nave, $numero_obl, $container_nr, $cartoni, $lordo, $cubatura, $data_carico, $destinatario, $tipo_container, $sigillo, $trasportatore, $luogo_consegna, $pratica_nr, $data_pratica, $tot_diritti, $tot_iva, $sanitario, $nr_sanitari, $ce, $cites, $age, $dogana_t1;

    protected $listeners = [
        'OrdineSelezionato' => 'ordineSelezionato',
    ];

    public function ordineSelezionato($ordineId){
        $this->ordine_id = $ordineId;

    }



    public function aggiungi()
    {
        dd($this->fattura_nr);
        /* return redirect()->to('/modal'); */
    }

    public function modifica()
    {
        dd($this->fattura_nr);
        /* return redirect()->to('/modal'); */
    }

    public function cancella()
    {
        dd($this->fattura_nr);
        /* return redirect()->to('/modal'); */
    }

    public function render()
    {
        return view('livewire.formdata', ['operazione' => Operazione::where('id',$this->ordine_id)->get()->first()]);
    }
}
