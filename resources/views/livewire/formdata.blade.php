<div>
    <div class="col-12">
        <div class="shadow p-2 mb-2 bg-white rounded">Dati fattura record : {{ $operazione->id }}

            <div class="row">
                <div class="col-7">
                    <label for="inputFattura" class="col-4 float-left">Fattura numero :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputFattura" value="{{ $operazione->nr_fattura }}">
                </div>
                <div class="col-5">
                    <label for="inputData" class="col-5 float-left">Data fattura :</label>
                    <input type="date" class="col-6 float-left form-control p-1"  style="height: 20px"id="inputData" value="{{ $operazione->data_fattura }}">
                </div>
                <div class="col-7">
                    <label for="inputFornitore" class="col-4 float-left">Fornitore :</label>
                    <input type="text" class="col-7 form-control float-left p-1"  style="height: 20px" id="inputFornitore" value="{{ $operazione->nome_fornitore }}">
                </div>
                <div class="col-5">
                    <label for="inputValuta" class="col-5 float-left">Valuta :</label>
                    <input type="number" class="col-6 float-left form-control p-1" style="height: 20px" id="inputValuta" value="{{ $operazione->valuta }}">
                </div>
              </div>

        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Dati nave/aereo
            <div class="row">
                <div class="col-7">
                    <label for="inputCompagnia" class="col-4 float-left">Compagnia navale :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputCompagnia" value="{{ $operazione->compagnia_aeronavale }}">
                </div>
                <div class="col-5">
                    <label for="inputDataArrivo" class="col-6 float-left">Data arrivo nave :</label>
                    <input type="date" class="col-5 float-left form-control p-1" style="height: 20px" id="inputDataArrivo" value="{{ $operazione->data_arrivo_nave }}">
                </div>
                <div class="col-7">
                    <label for="inputNomeNave" class="col-4 float-left">Nome nave :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputNomeNave" value="{{ $operazione->nome_nave }}">
                </div>
              </div>

        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Dati OBL/AWB
            <div class="row">
                <div class="col-7">
                    <label for="inputOBL" class="col-5 float-left">Numero OBL/AWB :</label>
                    <input type="text" class="col-6 form-control float-left p-1" style="height: 20px" id="inputOBL" value="{{ $operazione->numero_obl }}">
                </div>
                <div class="col-5">
                    <label for="inputContainer" class="col-6 float-left">Container n° :</label>
                    <input type="text" class="col-5 float-left form-control p-1" style="height: 20px" id="inputContainer" value="{{ $operazione->container_nr }}">
                </div>
                <div class="col-4">
                    <label for="inputCartoni" class="col-7 float-left">Numero cartoni :</label>
                    <input type="number" class="col-5 form-control float-left p-1" style="height: 20px" id="inputCartoni" value="{{ $operazione->cartoni }}">
                </div>
                <div class="col-4">
                    <label for="inputLordo" class="col-5 float-left">Peso lordo :</label>
                    <input type="number" class="col-6 float-left form-control" style="height: 20px" id="inputLordo" value="{{ $operazione->lordo_obl }}">
                </div>
                <div class="col-4">
                    <label for="inputCubatura" class="col-5 float-left">Cubatura :</label>
                    <input type="number" class="col-6 float-left form-control" style="height: 20px" id="inputCubatura" value="{{ $operazione->cubatura }}">
                </div>
                <div class="col-5">
                    <label for="inputDataCarico" class="col-5 float-left">Data carico :</label>
                    <input type="date" class="col-6 form-control float-left p-1" style="height: 20px" id="inputDataCarico" value="{{ $operazione->data_carico }}">
                </div>
                <div class="col-7">
                    <label for="inputDestinatario" class="col-4 float-left">Destinatario :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" id="inputDestinatario" value="{{ $operazione->destinatario_obl }}">
                </div>
                <div class="col-6">
                    <label for="inputTipoContainer" class="col-5 float-left">Tipo container :</label>
                    <input type="text" class="col-6 form-control float-left p-1" style="height: 20px" id="inputTipoContainer" value="{{ $operazione->tipo_container }}">
                </div>
                <div class="col-6">
                    <label for="inputSigillo" class="col-4 float-left">Sigillo :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" id="inputSigillo" value="{{ $operazione->sigillo }}">
                </div>
            </div>
        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Posizionamento
            <div class="row">
                <div class="col-6">
                    <label for="inputTrasportatore" class="col-4 float-left">Trasportatore :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputTrasportatore" value="{{ $operazione->trasportatore }}">
                </div>
                <div class="col-6">
                    <label for="inputConsegna" class="col-6 float-left">Luogo consegna :</label>
                    <input type="text" class="col-5 float-left form-control p-1" style="height: 20px" id="inputConsegna" value="{{ $operazione->consegna }}">
                </div>
              </div>
        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Diritti doganali / certificati / pratica
            <div class="row">
                <div class="col-7">
                    <label for="inputPratica" class="col-5 float-left">Numero pratica :</label>
                    <input type="text" class="col-6 form-control float-left p-1" style="height: 20px" id="inputPratica" value="{{ $operazione->numero_pratica }}">
                </div>
                <div class="col-5">
                    <label for="inputDataPratica" class="col-6 float-left">Data pratica :</label>
                    <input type="date" class="col-5 float-left form-control p-1" style="height: 20px" id="inputDataPratica" value="{{ $operazione->data_pratica }}">
                </div>
                <div class="col-6">
                    <label for="inputDiritti" class="col-5 float-left">Tot diritti doganali :</label>
                    <input type="number" class="col-7 form-control float-left p-1" style="height: 20px" id="inputDiritti" value="{{ $operazione->totale_diritti }}">
                </div>
                <div class="col-6">
                    <label for="inputLordo" class="col-5 float-left">Tot iva :</label>
                    <input type="number" class="col-7 float-left form-control" style="height: 20px" id="inputLordo" value="{{ $operazione->totale_iva }}">
                </div>
                <div class="col-2">
                    <label for="inputSanitario" class="col-10 float-left">Sanitario :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputSanitario" value='true' {{ $operazione->richiede_sanitari ? 'checked' : '' }} >
                </div>
                <div class="col-4">
                    <label for="inputNumeroSanitari" class="col-8 float-left">Sanitari emessi n° :</label>
                    <input type="number" class="col-4 form-control float-left p-1" style="height: 20px" id="inputNumneroSanitari" value="{{ $operazione->numero_sanitari }}">
                </div>
                <div class="col-2">
                    <label for="inputCe" class="col-6 float-left">CE :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputCe" value='true' {{ $operazione->richiede_ce ? 'checked':'' }} >
                </div>
                <div class="col-2">
                    <label for="inputCites" class="col-8 float-left">CITES :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputCites" value='true' {{ $operazione->richiede_cites ? 'checked' : '' }} >
                </div>
                <div class="col-2">
                    <label for="inputAge" class="col-7 float-left">AGE :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputAge" value='true' ( {{ $operazione->richiede_conformita ? 'checked' : '' }} >
                </div>
                <div class="col-11">
                    <label for="inputDoganaT1" class="col-3 float-left">Dogana per T1 :</label>
                    <input type="text" class="col-9 float-left form-control p-1" style="height: 20px" id="inputDoganaT1" value="{{ $operazione->dogana_t1 }}">
                </div>

            </div>
        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">
            <div class="row">
                <div class="col-4">
                    <button type="button" name="aggiungi" id="aggiungi" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" >Aggiungi operazione</button>
                </div>
                <div class="col-4">
                    <button type="button" name="modifica" id="modifica" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Modifica operazione</button>
                </div>
                <div class="col-4">
                    <button type="button" name="cancella" id="cancella" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Cancella operazione</button>
                </div>
                <div class="col-4">
                    <button type="button" name="generaDistinta" id="generaDistinta" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;"  wire:click="$emit('FareDistinta',{{ $operazione->id }})" {{-- wire:click='distinta' --}}>Genera distinta</button>
                </div>
                <div class="col-4">
                    <button type="button" name="generaMandati" id="generaMandati" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Genera mandati</button>
                </div>
                <div class="col-4">
                    <button type="button" name="generaBollettini" id="generaBollettini" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Genera bollettini</button>
                </div>
                <div class="col-4">
                    <button type="button" name="azzeraMaschera" id="azzeraMaschera" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" >Azzera maschera</button>
                </div>
                <div class="col-4">
                    <button type="button" name="fornitori" id="fornitori" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Fornitori</button>
                </div>
                <div class="col-4">
                    <button type="button" name="compagnie" id="compagnie" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Compagnie aero/navali</button>
                </div>
                <div class="col-4">
                    <button type="button" name="destinatari" id="destinatari" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Destinatari</button>
                </div>
                <div class="col-4">
                    <button type="button" name="trasportatori" id="trasportatori" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Trasportatori</button>
                </div>
                <div class="col-4">
                    <button type="button" name="luoghi" id="luoghi" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Luoghi di consegna</button>
                </div>
                <div class="col-4">
                    <button type="button" name="doganeT1" id="doganeT1" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Dogane T1</button>
                </div>
            </div>
        </div>
</div>
