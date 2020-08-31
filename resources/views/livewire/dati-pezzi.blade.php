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
                <label for="descrizioneuk" class="col-12 float-left">Pezzi :</label>
                <input type="text" class="col-12 float-left  " style="height: 20px" value="{{ $pezzo->pezzi }}">
        </div>
        <div class="col-6">
                <label for="descrizioneit" class="col-12 float-left">Colli :</label>
                <input type="text" class="col-12 float-left" style="height: 20px" value="{{ $pezzo->colli }}">
        </div>
        <div class="col-6">
                <label for="vocedoganale" class="col-12 float-left">Lordo :</label>
                <input type="text" class="col-12 float-left" style="height: 20px" value="{{ $pezzo->lordo }}">
        </div>
        <div class="col-6">
            <label for="dirittidoganali" class="col-12 float-left">Netto :</label>
            <input type="text" class="col-12 float-left" style="height: 20px" value="{{ $pezzo->netto }}">
        </div>
        <div class="col-6">
            <label for="dirittidoganali" class="col-12 float-left">valore :</label>
            <input type="text" class="col-12 float-left" style="height: 20px" value="{{ $pezzo->valore }}">
        </div>
        <div class="col-6">
            <label for="dirittidoganali" class="col-12 float-left">Codice articolo :</label>
            <input type="text" class="col-12 float-left" style="height: 20px" value="{{ $pezzo->codice_articolo }}">
        </div>
    @else
        <div class="col-6">
                <label for="descrizioneuk" class="col-12 float-left">Pezzi :</label>
                <input type="text" class="col-12 float-left  " style="height: 20px" >
        </div>
        <div class="col-6">
                <label for="descrizioneit" class="col-12 float-left">Colli :</label>
                <input type="text" class="col-12 float-left" style="height: 20px" >
        </div>
        <div class="col-6">
                <label for="vocedoganale" class="col-12 float-left">Lordo :</label>
                <input type="text" class="col-12 float-left" style="height: 20px" >
        </div>
        <div class="col-6">
            <label for="dirittidoganali" class="col-12 float-left">Netto :</label>
            <input type="text" class="col-12 float-left" style="height: 20px" >
        </div>
        <div class="col-6">
            <label for="dirittidoganali" class="col-12 float-left">Valore :</label>
            <input type="text" class="col-12 float-left" style="height: 20px" >
        </div>
        <div class="col-6">
            <label for="dirittidoganali" class="col-12 float-left">Codice articolo :</label>
            <input type="text" class="col-12 float-left" style="height: 20px" >
        </div>
    @endif
</div>
