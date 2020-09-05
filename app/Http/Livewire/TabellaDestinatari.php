<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Destinatario;
use Livewire\WithPagination;

class TabellaDestinatari extends Component
{
    use WithPagination;

    public $selezionato = 0;

    protected $listeners = [
        'DestinatarioSelezionato' => 'destinatarioSelezionato',
    ];

    public function destinatarioSelezionato($destinatarioId){
        $this->selezionato = $destinatarioId;
    }

    public function render()
    {
        $destinatari = Destinatario::orderBy('soprannome','asc')->paginate(17);
        return view('livewire.tabella-destinatari',compact('destinatari'));
    }
}
