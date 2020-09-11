<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operazione;
use App\Dogana;
use Carbon\Carbon;


class GeneraMandati extends Component
{
    public $ordine_id = 0;
    public $nome_dogana, $indirizzo_dogana, $cap_dogana, $luogo_dogana, $provincia_dogana, $numero_dogana,$pratica, $nome_dogana_arrivo, $indirizzo_dogana_arrivo, $numero_dogana_arrivo,$cap_dogana_arrivo,$luogo_dogana_arrivo, $provincia_dogana_arrivo;
    public $oggi;

    public function mount($id)
    {
        $this->ordine_id = $id;
        $operazione = Operazione::where('id','=',$id)->get()->first();
        $dogana = Dogana::where('soprannome','=',$operazione->dogana_t1)->get()->first();
        $dogana_arrivo = Dogana::where('soprannome','=',$operazione->dogana_sdoganamento)->get()->first();
        $this->nome_dogana = $dogana->nome;
        $this->indirizzo_dogana = $dogana->indirizzo;
        $this->numero_dogana = $dogana->numero;
        $this->cap_dogana = $dogana->cap;
        $this->luogo_dogana = $dogana->luogo;
        $this->provincia_dogana = $dogana->prvincia;
        $this->oggi = now()->format('d/m/Y');
        $this->pratica = $operazione->numero_pratica;
        $this->nome_dogana_arrivo = $dogana_arrivo->nome;
        $this->indirizzo_dogana_arrivo = $dogana_arrivo->indirizzo;
        $this->numero_dogana_arrivo = $dogana->numero;
        $this->cap_dogana_arrivo = $dogana_arrivo->cap;
        $this->luogo_dogana_arrivo = $dogana_arrivo->luogo;
        $this->provincia_dogana_arrivo = $dogana_arrivo->provincia;
    }

    public function render()
    {
        return view('livewire.genera-mandati');
    }
}
