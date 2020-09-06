<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Dogana;
use Livewire\WithPagination;

class TabellaDogane extends Component
{
    use WithPagination;

    public $selezionato = 0;

    protected $listeners = [
        'DoganaSelezionato' => 'doganaSelezionato',
    ];

    public function doganaSelezionato($doganaId){
        $this->selezionato = $doganaId;
    }
    public function render()
    {
        $dogane = Dogana::orderBy('soprannome','asc')->paginate(17);
        return view('livewire.tabella-dogane',compact('dogane'));
    }
}
