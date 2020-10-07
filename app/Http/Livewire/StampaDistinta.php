<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operazione;
use App\Fornitore;
use App\Destinatario;

class StampaDistinta extends Component
{
    public $ordine_id;
    public $pratica_numero, $container_numero, $destinatario_nome, $destinatario_indirizzo, $destinatario_numero, $destinatario_cap, $destinatario_luogo, $destinatario_stato, $fornitore_nome, $fornitore_indirizzo, $fornitore_numero, $fornitore_cap, $fornitore_luogo, $fornitore_stato, $resa, $valuta;
    public $operazione;

    public function mount($id)
    {
        $this->ordine_id = $id;
        $this->operazione = Operazione::where('id','=',$this->ordine_id)->get()->first();
        $fornitore = Fornitore::where('soprannome','=',$this->operazione->nome_fornitore)->get()->first();
        if($fornitore)
        {
            $this->fornitore_nome = $fornitore->nome;
            $this->fornitore_indirizzo = $fornitore->indirizzo;
            $this->fornitore_numero = $fornitore->numero;
            $this->fornitore_cap = $fornitore->cap;
            $this->fornitore_luogo = $fornitore->luogo;
            $this->fornitore_stato = $fornitore->stato;
            $this->container_numero = $this->operazione->container_nr;
            $this->pratica_numero = $this->operazione->numero_pratica;
            $this->resa = $this->operazione->resa;
            $this->valuta = $this->operazione->valuta;
        }
        $destinatario = Destinatario::where('soprannome','=', $this->operazione->destinatario_obl)->get()->first();
        if($destinatario)
        {
            $this->destinatario_nome = $destinatario->nome;
            $this->destinatario_indirizzo = $destinatario->indirizzo;
            $this->destinatario_numero = $destinatario->numero;
            $this->destinatario_cap = $destinatario->cap;
            $this->destinatario_luogo = $destinatario->luogo;
            $this->destinatario_stato = $destinatario->stato;

        }

    }

    public function render()
    {

        /* dd($fornitore->nome); */

        return view('livewire.stampa-distinta');
    }
}
