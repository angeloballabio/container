<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operazione;

class GeneraDistinta extends Component
{
    public $ordine_id = 0;


    public function mount($id)
    {

        $this->ordine_id = $id;
    }

    public function render()
    {
        return view('livewire.genera-distinta', ['operazione' => Operazione::where('id', $this->ordine_id)->get()->first()]);
    }
}
