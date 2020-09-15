<div class="row">
    <div class="col-12">
        <div class="shadow p-2 mb-2 bg-white rounded">
            <div class="row">
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="aggiungi">Aggiungi valuta</button>
                </div>
                @if($valuta_id)
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="modifica()">Modifica valuta</button>
                </div>
                @endif
                @if($valuta_id)
                <div class="col-4">
                    <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="cancella">Cancella valuta</button>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="shadow p-2 mb-2 bg-white rounded">
            <div class="row">
                <div class="col-12">
                    <label for="nome" class="col-3 float-left" style="text-align: right;">ISO :</label>
                    <input type="text" class="col-9 form-control float-left p-1" style="height: 20px" wire:model="valuta">
                    @error('valuta') <span style="color: red"><br>{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
    </div>
</div>

