<div class="row">
    <div class="col-12 d-flex justify-content-around" style="background-color: lightgrey">
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Aggiungi{{-- &#10010; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Modifica{{-- &#10004; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Cancella{{-- &#8722; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Sposta{{-- &#10549; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Ricarica{{-- &#9850; --}}</button>
    </div>
    @if($pezzo)
        <div class="col-6">
                <label for="descrizioneuk" class="col-12 float-left">Pezzi :
                <input type="text" class="col-12 float-left  " style="height: 20px" value="{{ $pezzo->pezzi }}"></label>
        </div>
        <div class="col-6">
                <label for="descrizioneit" class="col-12 float-left">Colli :
                <input type="text" class="col-12 float-left" style="height: 20px" value="{{ $pezzo->colli }}"></label>
        </div>
        <div class="col-6">
                <label for="vocedoganale" class="col-12 float-left">Lordo :
                <input type="text" class="col-12 float-left" style="height: 20px" value="{{ $pezzo->lordo }}"></label>
        </div>
        <div class="col-6">
            <label for="dirittidoganali" class="col-12 float-left">Netto :
            <input type="text" class="col-12 float-left" style="height: 20px" value="{{ $pezzo->netto }}"></label>
        </div>
        <div class="col-6">
            <label for="dirittidoganali" class="col-12 float-left">valore :
            <input type="text" class="col-12 float-left" style="height: 20px" value="{{ $pezzo->valore }}"></label>
        </div>
        <div class="col-6">
            <label for="dirittidoganali" class="col-12 float-left">Codice articolo :
            <input type="text" class="col-12 float-left" style="height: 20px" value="{{ $pezzo->codice_articolo }}"></label>
        </div>
    @else
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
    @endif
</div>
