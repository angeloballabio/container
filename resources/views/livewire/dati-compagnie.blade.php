<div class="row">
    <div class="col-12">
        <div class="shadow p-2 mb-2 bg-white rounded">
            <div class="row">
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="aggiungi">Aggiungi compagnia</button>
                </div>
                @if($compagnia_id)
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="modifica()">Modifica compagnia</button>
                </div>
                @endif
                @if($compagnia_id)
                <div class="col-4">
                    <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="cancella">Cancella compagnia</button>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="shadow p-2 mb-2 bg-white rounded">
            <div class="row">
                <div class="col-6">
                    <label for="nome" class="col-3 float-left" style="text-align: right;">Nome :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" wire:model="nome">
                    @error('nome') <span style="color: red"><br>{{ $message }}</span> @enderror
                </div>
                <div class="col-8">
                    <label for="indirizzo-web" class="col-2 float-left" style="text-align: right;">Indirizzo web :</label>
                    <input type="text" class="col-10 form-control float-left p-1" style="height: 20px" wire:model="indirizzo_web">
                    @error('indirizzo_web') <span style="color: red"><br>{{ $message }}</span> @enderror
                </div>
                <div class="col-6">
                    <label for="contatto" class="col-4 float-left" style="text-align: right;">contatto :</label>
                    <input type="text" class="col-8 form-control float-left p-1" style="height: 20px" wire:model="contatto">
                    @error('contatto') <span style="color: red"><br>{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
    </div>
</div>
