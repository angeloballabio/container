<div class="row">
    <div class="col-12">
        <div class="shadow p-2 mb-2 bg-white rounded">
            <div class="row">
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="aggiungi">Aggiungi operazione</button>
                </div>
                @if($trasportatore_id)
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="modifica()">Modifica operazione</button>
                </div>
                @endif
                @if($trasportatore_id)
                <div class="col-4">
                    <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="cancella">Cancella operazione</button>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="shadow p-2 mb-2 bg-white rounded">
            <div class="row">
                <div class="col-4">
                    <label for="soprannome" class="col-3 float-left" style="text-align: right;">Soprannome :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" wire:model="soprannome">
                </div>
                <div class="col-6">
                    <label for="nome" class="col-2 float-left" style="text-align: right;">nome :</label>
                    <input type="text" class="col-10 form-control float-left p-1" style="height: 20px" wire:model="nome">
                </div>
                <div class="col-2">
                    <label for="piva" class="col-4 float-left" style="text-align: right;">P.IVA :</label>
                    <input type="text" class="col-8 form-control float-left p-1" style="height: 20px" wire:model="piva">
                </div>
                <div class="col-9">
                    <label for="indirizzo" class="col-2 float-left" style="text-align: right;">indirizzo :</label>
                    <input type="text" class="col-10 form-control float-left p-1" style="height: 20px" wire:model="indirizzo">
                </div>
                <div class="col-3">
                    <label for="numero" class="col-3 float-left" style="text-align: right;">numero :</label>
                    <input type="text" class="col-9 form-control float-left p-1" style="height: 20px" wire:model="numero">
                </div>
                <div class="col-3">
                    <label for="cap" class="col-3 float-left" style="text-align: right;">Cap :</label>
                    <input type="text" class="col-8 form-control float-left p-1" style="height: 20px" wire:model="cap">
                </div>
                <div class="col-5">
                    <label for="luogo" class="col-3 float-left" style="text-align: right;">Localita :</label>
                    <input type="text" class="col-8 form-control float-left p-1" style="height: 20px" wire:model="luogo">
                </div>
                <div class="col-2">
                    <label for="provincia" class="col-5 float-left" style="text-align: right;">provincia :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" wire:model="provincia">
                </div>
                <div class="col-2">
                    <label for="stato" class="col-4 float-left" style="text-align: right;">Stato :</label>
                    <input type="text" class="col-8 form-control float-left p-1" style="height: 20px" wire:model="stato">
                </div>
                <div class="col-3">
                    <label for="telefono1" class="col-4 float-left" style="text-align: right;">Telefono1 :</label>
                    <input type="text" class="col-8 form-control float-left p-1" style="height: 20px" wire:model="telefono1">
                </div>
                <div class="col-3">
                    <label for="telefono2" class="col-4 float-left" style="text-align: right;">Telefono2 :</label>
                    <input type="text" class="col-8 form-control float-left p-1" style="height: 20px" wire:model="telefono2">
                </div>
                <div class="col-3">
                    <label for="mobile" class="col-4 float-left" style="text-align: right;">mobile :</label>
                    <input type="text" class="col-8 form-control float-left p-1" style="height: 20px" wire:model="mobile">
                </div>
                <div class="col-3">
                    <label for="fax" class="col-4 float-left" style="text-align: right;">Fax :</label>
                    <input type="text" class="col-8 form-control float-left p-1" style="height: 20px" wire:model="fax">
                </div>
                <div class="col-6">
                    <label for="mail" class="col-1 float-left" style="text-align: right;">Mal :</label>
                    <input type="text" class="col-8 form-control float-left p-1" style="height: 20px" wire:model="mail">
                </div>
            </div>
        </div>
    </div>
</div>
