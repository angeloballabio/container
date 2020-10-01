<div class="row">
    <div class="col-12 d-flex justify-content-around" style="background-color: lightgrey">
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block wire:click='aggiungi'>Aggiungi{{-- &#10010; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block wire:click='modifica'>Modifica{{-- &#10004; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block wire:click='cancella'>Cancella{{-- &#8722; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Sposta{{-- &#10549; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Ricarica{{-- &#9850; --}}</button>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger col-12" role="alert">
            Mancano alcuni dati indispensabili correggi
        </div>
    @endif
    {{-- @if($pezzo) --}}
        <div class="col-6">
                <label for="pezzi" class="col-12 float-left">Pezzi :
                <input type="text" class="col-12 float-left  " style="height: 20px" wire:model="pezzi" value="{{ old('pezzi') }}"></label>
                @error('pezzi') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
        </div>
        <div class="col-6">
                <label for="colli" class="col-12 float-left">Colli :
                <input type="text" class="col-12 float-left" style="height: 20px" wire:model="colli" value="{{ old('colli') }}"></label>
                @error('colli') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
        </div>
        <div class="col-6">
                <label for="lordo" class="col-12 float-left">Lordo :
                <input type="text" class="col-12 float-left" style="height: 20px" wire:model="lordo" value="{{ old('lordo') }}"></label>
                @error('lordo') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
        </div>
        <div class="col-6">
            <label for="netto" class="col-12 float-left">Netto :
            <input type="text" class="col-12 float-left" style="height: 20px" wire:model="netto" value="{{ old('netto') }}"></label>
            @error('netto') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
        </div>
        <div class="col-6">
            <label for="valore" class="col-12 float-left">valore :
            <input type="text" class="col-12 float-left" style="height: 20px" wire:model="valore" value="{{ old('valore') }}"></label>
            @error('valore') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
        </div>
        <div class="col-6">
            <label for="codice_articolo" class="col-12 float-left">Codice articolo :
            <input type="text" class="col-12 float-left" style="height: 20px" wire:model="codice_articolo" value="{{ old('codice_articolo') }}"></label>
            @error('codice_articolo') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
        </div>
    {{-- @else
        <div class="col-6">
                <label for="descrizioneuk" class="col-12 float-left">Pezzi :
                <input type="text" class="col-12 float-left  " style="height: 20px" ></label>
        </div>
        <div class="col-6">
                <label for="descrizioneit" class="col-12 float-left">Colli :
                <input type="text" class="col-12 float-left" style="height: 20px" ></label>
        </div>
        <div class="col-6">
                <label for="vocedoganale" class="col-12 float-left">Lordo :
                <input type="text" class="col-12 float-left" style="height: 20px" ></label>
        </div>
        <div class="col-6">
            <label for="dirittidoganali" class="col-12 float-left">Netto :
            <input type="text" class="col-12 float-left" style="height: 20px" ></label>
        </div>
        <div class="col-6">
            <label for="dirittidoganali" class="col-12 float-left">Valore :
            <input type="text" class="col-12 float-left" style="height: 20px" ></label>
        </div>
        <div class="col-6">
            <label for="dirittidoganali" class="col-12 float-left">Codice articolo :
            <input type="text" class="col-12 float-left" style="height: 20px" ></label>
        </div>
    @endif --}}
</div>
