<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operazione;
use App\Dogana;
use Carbon\Carbon;
use App\Fornitore;
use App\Destinatario;
use App\Trasportatore;


class GeneraMandati extends Component
{
    public $ordine_id;
    public $nome_dogana, $indirizzo_dogana, $cap_dogana, $luogo_dogana, $provincia_dogana, $numero_dogana,$pratica, $nome_dogana_arrivo, $indirizzo_dogana_arrivo, $numero_dogana_arrivo,$cap_dogana_arrivo,$luogo_dogana_arrivo, $provincia_dogana_arrivo, $paese_provenienza, $nome_destinatario, $indirizzo_destinatario, $cap_destinatario, $numero_destinatario, $luogo_destinatario, $provincia_destinatario, $container, $sigillo, $tipo_container, $cartoni, $lordo, $cubatura, $allegati, $trasportatore;
    public $oggi;

    public function mount($id)
    {
        $this->ordine_id = $id;
        $operazione = Operazione::where('id','=',$id)->get()->first();
        $dogana = Dogana::where('soprannome','=',$operazione->dogana_t1)->get()->first();
        $dogana_arrivo = Dogana::where('soprannome','=',$operazione->dogana_sdoganamento)->get()->first();
        $fornitore = Fornitore::where('soprannome','=',$operazione->nome_fornitore)->get()->first();
        $destinatario = Destinatario::where('soprannome','=',$operazione->destinatario_obl)->get()->first();
        $trasportatore = Trasportatore::where('soprannome','=',$operazione->trasportatore)->get()->first();

        $this->nome_dogana = $dogana->nome;
        $this->indirizzo_dogana = $dogana->indirizzo;
        $this->numero_dogana = $dogana->numero;
        $this->cap_dogana = $dogana->cap;
        $this->luogo_dogana = $dogana->luogo;
        $this->provincia_dogana = $dogana->provincia;
        $this->oggi = Carbon::parse($operazione->data_pratica)->format('d/m/Y');
        $this->pratica = $operazione->numero_pratica;
        $this->nome_dogana_arrivo = $dogana_arrivo->nome;
        $this->indirizzo_dogana_arrivo = $dogana_arrivo->indirizzo;
        $this->numero_dogana_arrivo = $dogana_arrivo->numero;
        $this->cap_dogana_arrivo = $dogana_arrivo->cap;
        $this->luogo_dogana_arrivo = $dogana_arrivo->luogo;
        $this->provincia_dogana_arrivo = $dogana_arrivo->provincia;
        $this->paese_provenienza = $fornitore->stato;
        $this->nome_destinatario = $destinatario->nome;
        $this->indirizzo_destinatario = $destinatario->indirizzo;
        $this->numero_destinatario = $destinatario->numero;
        $this->cap_destinatario = $destinatario->cap;
        $this->luogo_destinatario = $destinatario->luogo;
        $this->provincia_destinatario = $destinatario->provincia;
        $this->container = $operazione->container_nr;
        $this->sigillo = $operazione->sigillo;
        $this->tipo_container = $operazione->tipo_container;
        $this->cartoni = $operazione->cartoni;
        $this->lordo = $operazione->lordo_obl;
        $this->cubatura = $operazione->cubatura;
        $this->allegati = $operazione->allegati;
        $this->trasportatore = $trasportatore->nome;
    }

    public function render()
    {
        return view('livewire.genera-mandati');
    }
}
