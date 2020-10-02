<div class="row">
    <div class="col-12">
        <div class="shadow p-2 mb-2 bg-white rounded">
            <div class="row">
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="aggiungi">Aggiungi resa</button>
                </div>
                @if($resa_id)
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="modifica()">Modifica resa</button>
                </div>
                @endif
                @if($resa_id)
                <div class="col-4">
                    <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="cancella">Cancella resa</button>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="shadow p-2 mb-2 bg-white rounded">
            <div class="row">
                <div class="col-3">
                    @error('iso') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="iso" class="col-3 float-left" style="text-align: right;">ISO:</label>
                    <input type="text" class="col-4 form-control float-left p-1" style="height: 20px" wire:model="iso">
                </div>
                <div class="col-9">
                    @error('descrizione') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="descrizione" class="col-3 float-left" style="text-align: right;">Descrizione :</label>
                    <input type="text" class="col-9 form-control float-left p-1" style="height: 20px" wire:model="descrizione">

                </div>
            </div>
        </div>
    </div>
</div>
