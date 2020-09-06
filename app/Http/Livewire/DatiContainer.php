<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\TipoContainer;

class DatiContainer extends Component
{
    public $container_id;
    public $tipo;

    protected $listeners = [
        'ContainerSelezionato' => 'containerSelezionato',
    ];

    public function containerSelezionato($containerId){
        $this->container_id = $containerId;

        $container = TipoContainer::where('id',$this->container_id)->get()->first();
        if($container){
            $this->tipo = $container->tipo;
        }
    }

    public function aggiungi()
    {
        $container = new TipoContainer();
        $container->tipo = $this->tipo;
        $container->save();
        return redirect()->to('/gestione-container');
    }

    public function modifica()
    {
        $container = TipoContainer::where('id',$this->container_id)->get()->first();

        /* $container = new Container(); */
        $container->tipo = $this->tipo;
        $container->save();
        return redirect()->to('/gestione-container');
    }

    public function cancella()
    {
        $container = TipoContainer::where('id',$this->container_id)->get()->first();
        $container->delete();
        return redirect()->to('/gestione-container');
    }

    public function render()
    {
        return view('livewire.dati-container');
    }
}
