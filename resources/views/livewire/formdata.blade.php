<div>
    <div class="col-12">
        <div class="shadow p-2 mb-2 bg-white rounded">Dati fattura record : {{ $ordine_id }}
            <div class="row">
                <div class="col-7">
                    <label for="inputFattura" class="col-4 float-left">Fattura numero :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputFattura"   wire:model="fattura_nr">
                </div>
                <div class="col-5">
                    <label for="inputData" class="col-5 float-left">Data fattura :</label>
                    <input type="date" class="col-6 float-left form-control p-1"  style="height: 20px"id="inputData" wire:model="data_fattura">
                </div>
                <div class="col-7">
                    <label for="inputFornitore" class="col-4 float-left">Fornitore :</label>
                    {{-- <input type="text" class="col-7 form-control float-left p-1"  style="height: 20px" id="inputFornitore" wire:model="fornitore"> --}}
                    <select {{-- name="fornitore" id="fornitore" --}} class="col-7 float-left  custom-select" style="height: 25px; vertical-align: middle; padding-top: 0px;"  wire:model="fornitore">
                        {{-- <option value="0">Effettua la scelta</option> --}}
                        @foreach ($fornitori as $fornitore)
                          <option value="{{$fornitore->id}} {{ $fornitore == $fornitore->soprannome ? 'selected' : '' }}">{{$fornitore->soprannome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-5">
                    <label for="inputValuta" class="col-5 float-left">Valuta :</label>
                    <input type="text" class="col-6 float-left form-control p-1" style="height: 20px" id="inputValuta" wire:model="valuta">
                </div>
            </div>

        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Dati nave/aereo
            <div class="row">
                <div class="col-7">
                    <label for="inputCompagnia" class="col-4 float-left">Compagnia navale :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputCompagnia"  wire:model="compagnia_navale">
                </div>
                <div class="col-5">
                    <label for="inputDataArrivo" class="col-6 float-left">Data arrivo nave :</label>
                    <input type="date" class="col-5 float-left form-control p-1" style="height: 20px" id="inputDataArrivo"  wire:model="data_attivo_nave">
                </div>
                <div class="col-7">
                    <label for="inputNomeNave" class="col-4 float-left">Nome nave :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputNomeNave" wire:model="nome_nave">
                </div>
            </div>
        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Dati OBL/AWB
            <div class="row">
                <div class="col-7">
                    <label for="inputOBL" class="col-5 float-left">Numero OBL/AWB :</label>
                    <input type="text" class="col-6 form-control float-left p-1" style="height: 20px" id="inputOBL" wire:model="numero_obl">
                </div>
                <div class="col-5">
                    <label for="inputContainer" class="col-6 float-left">Container n° :</label>
                    <input type="text" class="col-5 float-left form-control p-1" style="height: 20px" id="inputContainer" wire:model="container_nr">
                </div>
                <div class="col-4">
                    <label for="inputCartoni" class="col-7 float-left">Numero cartoni :</label>
                    <input type="number" class="col-5 form-control float-left p-1" style="height: 20px" id="inputCartoni" wire:model="cartoni">
                </div>
                <div class="col-4">
                    <label for="inputLordo" class="col-5 float-left">Peso lordo :</label>
                    <input type="number" class="col-6 float-left form-control" style="height: 20px" id="inputLordo" wire:model="lordo">
                </div>
                <div class="col-4">
                    <label for="inputCubatura" class="col-5 float-left">Cubatura :</label>
                    <input type="number" class="col-6 float-left form-control" style="height: 20px" id="inputCubatura" wire:model="cubatura">
                </div>
                <div class="col-5">
                    <label for="inputDataCarico" class="col-5 float-left">Data carico :</label>
                    <input type="date" class="col-6 form-control float-left p-1" style="height: 20px" id="inputDataCarico" wire:model="data_carico">
                </div>
                <div class="col-7">
                    <label for="inputDestinatario" class="col-4 float-left">Destinatario :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" id="inputDestinatario" wire:model="destinatario">
                </div>
                <div class="col-6">
                    <label for="inputTipoContainer" class="col-5 float-left">Tipo container :</label>
                    <input type="text" class="col-6 form-control float-left p-1" style="height: 20px" id="inputTipoContainer" wire:model="tipo_container">
                </div>
                <div class="col-6">
                    <label for="inputSigillo" class="col-4 float-left">Sigillo :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" id="inputSigillo" wire:model="sigillo">
                </div>
            </div>
        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Posizionamento
            <div class="row">
                <div class="col-6">
                    <label for="inputTrasportatore" class="col-4 float-left">Trasportatore :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputTrasportatore" wire:model="trasportatore">
                </div>
                <div class="col-6">
                    <label for="inputConsegna" class="col-6 float-left">Luogo consegna :</label>
                    <input type="text" class="col-5 float-left form-control p-1" style="height: 20px" id="inputConsegna" wire:model="luogo_consegna">
                </div>
            </div>
        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Diritti doganali / certificati / pratica
            <div class="row">
                <div class="col-7">
                    <label for="inputPratica" class="col-5 float-left">Numero pratica :</label>
                    <input type="text" class="col-6 form-control float-left p-1" style="height: 20px" id="inputPratica" wire:model="pratica_nr">
                </div>
                <div class="col-5">
                    <label for="inputDataPratica" class="col-6 float-left">Data pratica :</label>
                    <input type="date" class="col-5 float-left form-control p-1" style="height: 20px" id="inputDataPratica" wire:model="data_pratica">
                </div>
                <div class="col-6">
                    <label for="inputDiritti" class="col-5 float-left">Tot diritti doganali :</label>
                    <input type="number" class="col-7 form-control float-left p-1" style="height: 20px" id="inputDiritti" wire:model="tot_diritti">
                </div>
                <div class="col-6">
                    <label for="inputLordo" class="col-5 float-left">Tot iva :</label>
                    <input type="number" class="col-7 float-left form-control" style="height: 20px" id="inputLordo" wire:model="tot_iva">
                </div>
                <div class="col-2">
                    <label for="inputSanitario" class="col-10 float-left">Sanitario :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputSanitario" {{ $sanitario ? 'checked' : '' }}wire:model="sanitario">
                </div>
                <div class="col-4">
                    <label for="inputNumeroSanitari" class="col-8 float-left">Sanitari emessi n° :</label>
                    <input type="number" class="col-4 form-control float-left p-1" style="height: 20px" id="inputNumneroSanitari" wire:model="nr_sanitari">
                </div>
                <div class="col-2">
                    <label for="inputCe" class="col-6 float-left">CE :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputCe" {{ $ce ? 'checked':'' }} wire:model="ce">
                </div>
                <div class="col-2">
                    <label for="inputCites" class="col-8 float-left">CITES :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputCites" {{ $cites ? 'checked' : '' }} wire:model="cites">
                </div>
                <div class="col-2">
                    <label for="inputAge" class="col-7 float-left">AGE :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputAge" {{ $age ? 'checked' : '' }} wire:model="age">
                </div>
                <div class="col-11">
                    <label for="inputDoganaT1" class="col-3 float-left">Dogana per T1 :</label>
                    <input type="text" class="col-9 float-left form-control p-1" style="height: 20px" id="inputDoganaT1" wire:model="dogana_t1">
                </div>

            </div>
        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">
            <div class="row">
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="aggiungi">Aggiungi operazione</button>
                </div>
                @if($ordine_id)
                <div class="col-4">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="modifica()">Modifica operazione</button>
                </div>
                @endif
                @if($ordine_id)
                <div class="col-4">
                    <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="cancella">Cancella operazione</button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
