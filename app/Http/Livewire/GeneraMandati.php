<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GeneraMandati extends Component
{
    public $ordine_id = 0;

    public function mount($id)
    {
        $this->ordine_id = $id;
    }

    public function render()
    {
        return view('livewire.genera-mandati');
    }
}
