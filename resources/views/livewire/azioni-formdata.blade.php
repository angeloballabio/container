<div>
        @if($ordine_id)
        <div class="shadow p-2 mb-2 bg-white rounded">
            <div class="row">
                <div class="col-4">
                    <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="azioneSelezionata">Genera distinta</button>
                </div>
                <div class="col-4">
                    <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Genera mandati</button>
                </div>
                <div class="col-4">
                    <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Genera bollettini</button>
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
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Destinatari</button>
                </div>
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Trasportatori</button>
                </div>
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Luoghi di consegna</button>
                </div>
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Dogane T1</button>
                </div>
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Tipo container</button>
                </div>
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Tipo valuta</button>
                </div>
            </div>
        </div>

        @else
        <div class="shadow p-2 mb-2 bg-white rounded">
        <div class="row">

            <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" disabled >Genera distinta</button>
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
                <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Destinatari</button>
            </div>
            <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Trasportatori</button>
            </div>
            <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Luoghi di consegna</button>
            </div>
            <div class="col-4">
                <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Dogane T1</button>
            </div>
            <div class="col-4">
                <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Tipo container</button>
            </div>
            <div class="col-4">
                <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Tipo valuta</button>
            </div>
        </div>
        </div>
        @endif

</div>
