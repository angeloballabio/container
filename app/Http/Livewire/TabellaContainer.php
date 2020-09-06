<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\TipoContainer;
use Livewire\WithPagination;

class TabellaContainer extends Component
{
    use WithPagination;

    public $selezionato = 0;

    protected $listeners = [
        'ContainerSelezionato' => 'containerSelezionato',
    ];

    public function containerSelezionato($containerId){
        $this->selezionato = $containerId;
    }

    public function render()
    {
        $containers = TipoContainer::orderBy('tipo','asc')->paginate(26);
        return view('livewire.tabella-container',compact('containers'));
    }
}
