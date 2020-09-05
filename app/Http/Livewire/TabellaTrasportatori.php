<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Trasportatore;
use Livewire\WithPagination;

class TabellaTrasportatori extends Component
{
    use WithPagination;

    public $selezionato = 0;

    protected $listeners = [
        'TrasportatoreSelezionato' => 'trasportatoreSelezionato',
    ];

    public function trasportatoreSelezionato($trasportatoreId){
        $this->selezionato = $trasportatoreId;
    }

    public function render()
    {
        $trasportatori = Trasportatore::orderBy('soprannome','asc')->paginate(17);
        return view('livewire.tabella-trasportatori', compact('trasportatori'));
    }
}
