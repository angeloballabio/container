<div>
        {{-- @if($ordine_id) --}}
        <div class="shadow p-2 mb-2 bg-white rounded">
            <div class="row">
                <div class="col-4">
                    <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="generaDistinta" >Genera distinta</button>
                </div>
                <div class="col-4">
                    <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="generaMandati">Genera mandati</button>
                </div>
                <div class="col-4">
                    <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="generaBollettini">Genera bollettini</button>
                </div>
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="azzeraMaschera">Azzera maschera</button>
                </div>
                <div class="col-4">
                    <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneFornitori'>Fornitori</button>
                </div>
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneCompagnie'>Compagnie aero/navali</button>
                </div>
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneDestinatari' >Destinatari</button>
                </div>
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneTrasportatori'>Trasportatori</button>
                </div>
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneConsegna'>Luoghi di consegna</button>
                </div>
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneDogane'>Dogane T1</button>
                </div>
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneContainer'>Tipo container</button>
                </div>
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneValuta'>Tipo valuta</button>
                </div>
            </div>
        </div>

        {{-- @else
        <div class="shadow p-2 mb-2 bg-white rounded">
        <div class="row">
            <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" disabled="true" >Genera distinta</button>
            </div>
            <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" disabled>Genera mandati</button>
            </div>
            <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" disabled>Genera bollettini</button>
            </div>
            <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='azzeraMaschera'>Azzera maschera</button>
            </div>
            <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneFornitori'>Fornitori</button>
            </div>
            <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneCompagnie'>Compagnie aero/navali</button>
            </div>
            <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneDestinatari'>Destinatari</button>
            </div>
            <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneTrasportatori' >Trasportatori</button>
            </div>
            <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneConsegna'>Luoghi di consegna</button>
            </div>
            <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneDogane'>Dogane T1</button>
            </div>
            <div class="col-4">
                <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneContainer'>Tipo container</button>
            </div>
            <div class="col-4">
                <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='gestioneValuta'>Tipo valuta</button>
            </div>
        </div>
        </div>
        @endif --}}

</div>
