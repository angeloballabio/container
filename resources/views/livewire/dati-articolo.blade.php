<div class="row">
    <div class="col-12 d-flex justify-content-around" style="background-color: lightgray">
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block wire:click="aggiungi">Aggiungi{{-- &#10010; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block wire:click="modifica()">Modifica{{-- &#10004; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block wire:click="cancella">Cancella{{-- &#8722; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Sposta{{-- &#10549; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Ricarica{{-- &#9850; --}}</button>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger col-12" role="alert">
            Mancano alcuni dati indispensabili correggi
        </div>

    @endif
    <div class="col-6">

            <label for="descrizioneuk" class="col-12 float-left">Descrizione articolo uk : fornitore:{{ $fornitore_id }}
            <input type="text" class="col-12 float-left @error('descrizioneuk') non valida @enderror" style="height: 20px"  wire:model="descrizione_uk" value="{{ old('descrizioneuk') }}"></label>
            @error('descrizione_uk') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
    </div>
    <div class="col-6">
            <label for="descrizioneit" class="col-12 float-left">Descrizione articolo it :
            <input type="text" class="col-12 float-left" style="height: 20px" wire:model="descrizione_it"></label>
            @error('descrizione_it') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
    </div>
    <div class="col-3">
            <label for="vocedoganale" class="col-12 float-left">Voce doganale taric :
            <input type="text" class="col-12 float-left" style="height: 20px" wire:model="voce_doganale"></label>
            @error('voce_doganale') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
    </div>
    <div class="col-3">
        <label for="dirittidoganali" class="col-12 float-left">Diritti doganali :
        <input type="text" class="col-12 float-left" style="height: 20px" wire:model="diritti_doganali"></label>
        @error('dirittidoganali') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
    </div>
    <div class="col-3">
        <label for="aliquota_iva" class="col-12 float-left">Iva % :
        <input type="text" class="col-12 float-left" style="height: 20px" wire:model="aliquota_iva"></label>
        @error('aliquota_iva') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
    </div>
    <div class="col-3">
        <label for="dirittidoganali" class="col-12 float-left">Iva :
        <input type="text" class="col-12 float-left" style="height: 20px" wire:model="val_iva"></label>
        @error('dirittidoganali') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
    </div>
    <div class="col-6 shadow p-2 mb-2 bg-gray-300 rounded">
        <div class="col-4 float-left">
            <input type="checkbox"  style="height: 20px"  {{ $acciaio ? 'checked' : '' }} wire:model="acciaio"> <label for="acciaio" class="align-top" style="height: 20px">Acciaio </label>
        </div>
        <div class="col-4 float-left">
            <input type="checkbox"  style="height: 20px" wire:model="acciaio_inox" {{ $acciaio_inox ? 'checked' : ''}} > <label for="acciaio_inox" class="align-top" style="height: 20px">Acciaio inox</label>
        </div>
        <div class="col-4 float-left">
            <input type="checkbox"  style="height: 20px" wire:model="vetro" {{ $vetro ? 'checked' : ''}} > <label for="vetro" class="align-top" style="height: 20px">Articoli in vetro</label>
        </div>
        <div class="col-4 float-left">
            <input type="checkbox"  style="height: 20px" wire:model="posateria" {{ $posateria ? 'checked' : ''}} > <label for="posateria" class="align-top" style="height: 20px">Posateria acciaio inox</label>
        </div>
        <div class="col-4 float-left">
            <input type="checkbox"  style="height: 20px" wire:model="attrezzi_cucina" {{ $attrezzi_cucina ? 'checked' : ''}} > <label for="attrezzi_cucina" class="align-top" style="height: 20px">Strimenti cucina inox</label>
        </div>
        <div class="col-4 float-left">
            <input type="checkbox"  style="height: 20px" wire:model="plastica" {{ $plastica ? 'checked' : ''}} > <label for="plastica" class="align-top" style="height: 20px">Articoli in palstica</label>
        </div>
        <div class="col-4 float-left">
            <input type="checkbox"  style="height: 20px" wire:model="legno" {{ $legno ? 'checked' : ''}} > <label for="legno" class="align-top" style="height: 20px">Articoli in legno</label>
        </div>
        <div class="col-4 float-left">
            <input type="checkbox"  style="height: 20px" wire:model="bambu" {{ $bambu ? 'checked' : ''}} > <label for="bambu" class="align-top" style="height: 20px">Articoli in bambù</label>
        </div>
        <div class="col-4 float-left">
            <input type="checkbox"  style="height: 20px" wire:model="ceramica" {{ $ceramica ? 'checked' : ''}} > <label for="ceramica" class="align-top" style="height: 20px">Articoli in ceramica</label>
        </div>
        <div class="col-4 float-left">
            <input type="checkbox"  style="height: 20px" wire:model="carta" {{ $carta ? 'checked' : ''}} > <label for="carta" class="align-top" style="height: 20px">Articoli pasta carta</label>
        </div>
        <div class="col-4 float-left">
            <input type="checkbox"  style="height: 20px" wire:model="pietra" {{ $pietra ? 'checked' : ''}} > <label for="pietra" class="align-top" style="height: 20px">Articoli in pietra</label>
        </div>
    </div>
    <div class="col-6 shadow p-2 mb-2 bg-gray-300 rounded">
        <div class="col-4 float-left">
            <input type="checkbox"  style="height: 20px" wire:model="richiede_ce" {{ $richiede_ce ? 'checked' : ''}} > <label for="richiede_ce" class="align-top" style="height: 20px">Richiede CE</label>
        </div>
        <div class="col-4 float-left">
            <input type="checkbox"  style="height: 20px" wire:model="richiede_age" {{ $richiede_age ? 'checked' : ''}} > <label for="richiede_age" class="align-top" style="height: 20px">Riciede AGE</label>
        </div>
        <div class="col-4 float-left">
            <input type="checkbox"  style="height: 20px" wire:model="richiede_cites" {{ $richiede_cites ? checked : ''}} > <label for="richiede_cites" class="align-top" style="height: 20px">Richiede CITES</label>
        </div>
        <div class="col-4 float-left">
            <label for="acciaio" style="height: 20px">Codice articolo :</label>
        </div>
        <div class="col-4 float-left">
            <input type="text"  style="height: 20px" id="codicearticolo" wire:model='codicearticolo'>
        </div>
        <div class="col-4 float-left">
            <button type="button" class="btn btn-primary" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click='trova_articolo'>Trova articolo</button>
        </div>
        <div class="col-12 float-left">
            <label for="codicearticolo" style="height: 20px">Articolo menzionato nella descrizione :</label>
            <input type="text"  style="height: 20px" id="trovatoarticolo" wire:model='trovatoarticolo'>
        </div>
        <input type="hidden"  style="height: 20px" wire:model="ordine_id" value="{{ $ordine_id }}">
    </div>

</div>
