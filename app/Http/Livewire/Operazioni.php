<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operazione;
use Livewire\WithPagination;

class Operazioni extends Component
{
    public function render()
    {
        return view('livewire.operazioni');
    }
}
