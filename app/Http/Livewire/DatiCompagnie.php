<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Compagnia;

class DatiCompagnie extends Component
{
    public $compagnia_id;
    public $nome, $indirizzo_web, $contatto;

    protected $listeners = [
        'CompagniaSelezionato' => 'compagniaSelezionato',
    ];

    public function compagniaSelezionato($compagniaId){
        $this->compagnia_id = $compagniaId;

        $compagnia = Compagnia::where('id',$this->compagnia_id)->get()->first();
        if($compagnia){
            $this->nome = $compagnia->nome;
            $this->indirizzo_web = $compagnia->indirizzo_web;
            $this->contatto = $compagnia->contatto;
        }

    }

    public function aggiungi()
    {
        $compagnia = new Compagnia();
        $compagnia->nome = $this->nome;
        $compagnia->indirizzo_web =$this->indirizzo_web;
        $compagnia->contatto = $this->contatto;
        $compagnia->save();
    }

    public function modifica()
    {
        $compagnia = Compagnia::where('id',$this->compagnia_id)->get()->first();

        $compagnia = new Compagnia();
        $compagnia->nome = $this->nome;
        $compagnia->indirizzo_web =$this->indirizzo_web;
        $compagnia->contatto = $this->contatto;
        $compagnia->save();
        return redirect()->to('/compagnie');
    }

    public function cancella()
    {
        $compagnia = Compagnia::where('id',$this->compagnia_id)->get()->first();
        $compagnia->delete();
        return redirect()->to('/compagnie');
    }
    public function render()
    {
        return view('livewire.dati-compagnie');
    }
}
