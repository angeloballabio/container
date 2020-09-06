<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Destinatario;

class DatiDestinatario extends Component
{
    public $destinatario_id;
    public $soprannome, $nome, $indirizzo, $cap, $luogo, $provincia, $numero, $stato, $telefono1, $telefono2, $mobile, $fax, $mail, $piva;


    protected $listeners = [
        'DestinatarioSelezionato' => 'destinatarioSelezionato',
    ];

    public function destinatarioSelezionato($destinatarioId){
        $this->destinatario_id = $destinatarioId;

        $destinatario = Destinatario::where('id',$this->destinatario_id)->get()->first();
        if($destinatario){
            $this->soprannome = $destinatario->soprannome;
            $this->nome = $destinatario->nome;
            $this->indirizzo = $destinatario->indirizzo;
            $this->cap = $destinatario->cap;
            $this->luogo = $destinatario->luogo;
            $this->provincia = $destinatario->provincia;
            $this->numero = $destinatario->numero;
            $this->stato = $destinatario->stato;
            $this->telefono1 = $destinatario->telefono1;
            $this->telefono2 = $destinatario->telefono2;
            $this->mobile = $destinatario->mobile;
            $this->fax = $destinatario->fax;
            $this->mail = $destinatario->mail;
            $this->piva = $destinatario->piva;
        }

    }

    public function aggiungi()
    {
        $destinatario = new Destinatario();
        $destinatario->soprannome = $this->soprannome;
        $destinatario->nome =$this->nome;
        $destinatario->indirizzo = $this->indirizzo;
        $destinatario->cap = $this->cap;
        $destinatario->luogo = $this->luogo;
        $destinatario->provincia = $this->provincia;
        $destinatario->numero = $this->numero;
        $destinatario->stato = $this->stato;
        $destinatario->telefono1 = $this->telefono1;
        $destinatario->telefono2 = $this->telefono2;
        $destinatario->mobile = $this->mobile;
        $destinatario->fax = $this->fax;
        $destinatario->mail = $this->mail;
        $destinatario->piva = $this->piva;
        $destinatario->save();
        return redirect()->to('/gestione-destinatari');
    }

    public function modifica()
    {
        $destinatario = Destinatario::where('id',$this->destinatario_id)->get()->first();

        $destinatario->soprannome = $this->soprannome;
        $destinatario->nome =$this->nome;
        $destinatario->indirizzo = $this->indirizzo;
        $destinatario->cap = $this->cap;
        $destinatario->luogo = $this->luogo;
        $destinatario->provincia = $this->provincia;
        $destinatario->numero = $this->numero;
        $destinatario->stato = $this->stato;
        $destinatario->telefono1 = $this->telefono1;
        $destinatario->telefono2 = $this->telefono2;
        $destinatario->mobile = $this->mobile;
        $destinatario->fax = $this->fax;
        $destinatario->mail = $this->mail;
        $destinatario->piva = $this->piva;
        $destinatario->save();
        return redirect()->to('/gestione-destinatari');
    }

    public function cancella()
    {
        $destinatario = Destinatario::where('id',$this->destinatario_id)->get()->first();
        $destinatario->delete();
        return redirect()->to('/gestione-destinatari');
    }

    public function render()
    {
        return view('livewire.dati-destinatario');
    }
}
