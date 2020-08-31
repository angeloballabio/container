<div class="row">
    <div class="col-12 d-flex justify-content-around" style="background-color: lightgray">
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Aggiungi{{-- &#10010; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Modifica{{-- &#10004; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Cancella{{-- &#8722; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Sposta{{-- &#10549; --}}</button>
        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>Ricarica{{-- &#9850; --}}</button>
    </div>

    @if($articolo_sel)
        <div class="col-6">
                <label for="descrizioneuk" class="col-12 float-left">Descrizione articolo uk :</label>
                <input type="text" class="col-12 float-left  " style="height: 20px" value="{{ $articolo_sel->descrizione_uk }}">
        </div>
        <div class="col-6">
                <label for="descrizioneit" class="col-12 float-left">Descrizione articolo it :</label>
                <input type="text" class="col-12 float-left" style="height: 20px" value="{{ $articolo_sel->descrizione_it }}">
        </div>
        <div class="col-3">
                <label for="vocedoganale" class="col-12 float-left">Voce doganale taric :</label>
                <input type="text" class="col-12 float-left" style="height: 20px" value="{{ $articolo_sel->voce_doganale }}">
        </div>
        <div class="col-3">
            <label for="dirittidoganali" class="col-12 float-left">Diritti doganali :</label>
            <input type="text" class="col-12 float-left" style="height: 20px" value="{{ $articolo_sel->diritti_doganali }}">
        </div>
        <div class="col-3">
            <label for="dirittidoganali" class="col-12 float-left">Iva % :</label>
            <input type="text" class="col-12 float-left" style="height: 20px" value="{{ $articolo_sel->aliquota_iva }}">
        </div>
        <div class="col-3">
            <label for="dirittidoganali" class="col-12 float-left">Iva :</label>
            <input type="text" class="col-12 float-left" style="height: 20px" value="{{ $articolo_sel->val_iva }}">
        </div>
        <div class="col-6 shadow p-2 mb-2 bg-gray-300 rounded">
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="acciaio" value="true" {{ $articolo_sel->acciaio ? 'checked' : '' }} > <label for="acciaio" style="height: 20px">Acciaio</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="acciaioinox" value="true" {{ $articolo_sel->acciaio_inox ? 'checked' : ''}} > <label for="acciaio" style="height: 20px">Acciaio inox</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="vetro" value="true" {{ $articolo_sel->vetro ? 'checked' : ''}} > <label for="acciaio" style="height: 20px">Articoli in vetro</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="posateria" value="true" {{ $articolo_sel->posateria ? 'checked' : ''}} > <label for="acciaio" style="height: 20px">Posateria acciaio inox</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="atterezzicucina" value="true" {{ $articolo_sel->attrezzi_cucina ? 'checked' : ''}} > <label for="acciaio" style="height: 20px">Strimenti cucina inox</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="plastica" value="true" {{ $articolo_sel->plastica ? 'checked' : ''}} > <label for="acciaio" style="height: 20px">Articoli in palstica</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="legno" value="true" {{ $articolo_sel->legno ? 'checked' : ''}} > <label for="acciaio" style="height: 20px">Articoli in legno</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="banbu" value="true" {{ $articolo_sel->banbu ? 'checked' : ''}} > <label for="acciaio" style="height: 20px">Articoli in banbù</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="ceramica" value="true" {{ $articolo_sel->ceramica ? 'checked' : ''}} > <label for="acciaio" style="height: 20px">Articoli in ceramica</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="carta" value="true" {{ $articolo_sel->carta ? 'checked' : ''}} > <label for="acciaio" style="height: 20px">Articoli pasta carta</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="pietra" value="true" {{ $articolo_sel->pietra ? 'checked' : ''}} > <label for="acciaio" style="height: 20px">Articoli in pietra</label>
            </div>
        </div>
        <div class="col-6 shadow p-2 mb-2 bg-white rounded">
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="ce" value="true" {{ $articolo_sel->richiede_ce ? 'checked' : ''}} > <label for="acciaio" style="height: 20px">Richiede CE</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="age" value="true" {{ $articolo_sel->richiede_age ? 'checked' : ''}} > <label for="acciaio" style="height: 20px">Riciede AGE</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="cites" value="true" {{ $articolo_sel->richiede_cites ? checked : ''}} > <label for="acciaio" style="height: 20px">Richiede CITES</label>
            </div>
            <div class="col-4 float-left">
                <label for="acciaio" style="height: 20px">Codice articolo :</label>
            </div>
            <div class="col-4 float-left">
                <input type="text"  style="height: 20px" id="codicearticolo">
            </div>
            <div class="col-4 float-left">
                <button type="button" class="btn btn-primary" style="height: 25px; vertical-align: middle; padding-top: 0px;">Trova articolo</button>
            </div>
            <div class="col-12 float-left">
                <label for="acciaio" style="height: 20px">Articolo menzionato nella descrizione :</label>
                <input type="text"  style="height: 20px" id="codicearticolo">
            </div>
        </div>
    @else
        <div class="col-6">
            <label for="descrizioneuk" class="col-12 float-left">Descrizione articolo uk :</label>
            <input type="text" class="col-12 float-left  " style="height: 20px" {{-- value="{{ $articolo_sel->descrizione_uk }}" --}}>
        </div>
        <div class="col-6">
            <label for="descrizioneit" class="col-12 float-left">Descrizione articolo it :</label>
            <input type="text" class="col-12 float-left" style="height: 20px" {{-- value="{{ $articolo_sel->descrizione_it }}" --}}>
        </div>
        <div class="col-3">
            <label for="vocedoganale" class="col-12 float-left">Voce doganale taric :</label>
            <input type="text" class="col-12 float-left" style="height: 20px" {{-- value="{{ $articolo_sel->voce_doganale }}" --}}>
        </div>
        <div class="col-3">
            <label for="dirittidoganali" class="col-12 float-left">Diritti doganali :</label>
            <input type="text" class="col-12 float-left" style="height: 20px" {{-- value="{{ $articolo_sel->diritti_doganali }}" --}}>
        </div>
        <div class="col-3">
            <label for="dirittidoganali" class="col-12 float-left">Iva % :</label>
            <input type="text" class="col-12 float-left" style="height: 20px" {{-- value="{{ $articolo_sel->aliquota_iva }}" --}}>
        </div>
        <div class="col-3">
            <label for="dirittidoganali" class="col-12 float-left">Iva :</label>
            <input type="text" class="col-12 float-left" style="height: 20px" {{-- value="{{ $articolo_sel->val_iva }}" --}}>
        </div>
        <div class="col-6 shadow p-2 m-2  bg-gray-200 rounded" style="border-style: solid; border-width: 1px;">
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="acciaio" value="true" {{-- {{ $articolo_sel->acciaio ? 'checked' : '' }} --}} > <label for="acciaio" style="height: 20px">Acciaio</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="acciaioinox" value="true" {{-- {{ $articolo_sel->acciaio_inox ? 'checked' : ''}} --}} > <label for="acciaio" style="height: 20px">Acciaio inox</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="vetro" value="true" {{-- {{ $articolo_sel->vetro ? 'checked' : ''}} --}} > <label for="acciaio" style="height: 20px">Articoli in vetro</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="posateria" value="true" {{-- {{ $articolo_sel->posateria ? 'checked' : ''}} --}} > <label for="acciaio" style="height: 20px">Posateria acciaio inox</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="atterezzicucina" value="true" {{-- {{ $articolo_sel->attrezzi_cucina ? 'checked' : ''}} --}} > <label for="acciaio" style="height: 20px">Strimenti cucina inox</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="plastica" value="true" {{-- {{ $articolo_sel->plastica ? 'checked' : ''}} --}} > <label for="acciaio" style="height: 20px">Articoli in palstica</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="legno" value="true" {{-- {{ $articolo_sel->legno ? 'checked' : ''}} --}} > <label for="acciaio" style="height: 20px">Articoli in legno</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="banbu" value="true" {{-- {{ $articolo_sel->banbu ? 'checked' : ''}} --}} > <label for="acciaio" style="height: 20px">Articoli in banbù</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="ceramica" value="true" {{-- {{ $articolo_sel->ceramica ? 'checked' : ''}} --}} > <label for="acciaio" style="height: 20px">Articoli in ceramica</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="carta" value="true" {{-- {{ $articolo_sel->carta ? 'checked' : ''}} --}} > <label for="acciaio" style="height: 20px">Articoli pasta carta</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="pietra" value="true" {{-- {{ $articolo_sel->pietra ? 'checked' : ''}} --}} > <label for="acciaio" style="height: 20px">Articoli in pietra</label>
            </div>
        </div>
        <div class="col-5 shadow p-2 m-2  bg-gray-200 rounded" style="border-style: solid; border-width: 1px;">
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="ce" value="true" {{-- {{ $articolo_sel->richiede_ce ? 'checked' : ''}} --}} > <label for="acciaio" style="height: 20px">Richiede CE</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="age" value="true" {{-- {{ $articolo_sel->richiede_age ? 'checked' : ''} --}}} > <label for="acciaio" style="height: 20px">Riciede AGE</label>
            </div>
            <div class="col-4 float-left">
                <input type="checkbox"  style="height: 20px" id="cites" value="true" {{-- {{ $articolo_sel->richiede_cites ? checked : ''}} --}} > <label for="acciaio" style="height: 20px">Richiede CITES</label>
            </div>
            <div class="col-4 float-left">
                <label for="acciaio" style="height: 20px">Codice articolo :</label>
            </div>
            <div class="col-4 float-left">
                <input type="text"  style="height: 20px" id="codicearticolo">
            </div>
            <div class="col-4 float-left">
                <button type="button" class="btn btn-primary" style="height: 25px; vertical-align: middle; padding-top: 0px;">Trova articolo</button>
            </div>
            <div class="col-12 float-left">
                <label for="acciaio" style="height: 20px">Articolo menzionato nella descrizione :</label>
                <input type="text"  style="height: 20px" id="codicearticolo">
            </div>
        </div>
    @endif
</div>
