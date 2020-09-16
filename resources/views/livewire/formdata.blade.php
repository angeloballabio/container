<div>
    <div class="col-12">
        <div class="shadow p-2 mb-2 bg-white rounded">Dati fattura record : {{ $ordine_id }}
            <div class="row">
                <div class="col-7">
                    @error('fattura_nr') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror

                    <label for="fattura_nr" class="col-4 float-left">Fattura numero :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="fattura_nr"   wire:model="fattura_nr">

                </div>
                <div class="col-5">
                    @error('data_fattura') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputData" class="col-4 float-left">Data fattura</label>
                    <input type="date" class="col-7 float-left form-control p-1"  style="height: 20px"id="inputData" wire:model="data_fattura">


                </div>
                <div class="col-7">
                    @error('fornitore') <div class="ml-3"><span style="color: red">{{ $message }}</span> </div>@enderror
                    <label for="inputFornitore" class="col-4 float-left">Fornitore :</label>
                    <select  class="col-8 float-left  custom-select" style="height: 25px; vertical-align: middle; padding-top: 0px;"  wire:model="fornitore">
                        <option value="0">Effettua la scelta</option>
                        @foreach ($fornitori as $fornitore)
                          <option value="{{$fornitore->soprannome}} {{ $fornitore == $fornitore->soprannome ? 'selected' : '' }}">{{$fornitore->soprannome}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-5">
                    @error('valuta') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputValuta" class="col-4 float-left">Valuta :</label>
                    <select  class="col-8 float-left  custom-select" style="height: 25px; vertical-align: middle; padding-top: 0px;"  wire:model="valuta">
                        <option value="0">Effettua la scelta</option>
                        @foreach ($valute as $valuta)
                          <option value="{{$valuta->iso}} {{ $valuta == $valuta->iso ? 'selected' : '' }}">{{$valuta->iso}}</option>
                        @endforeach
                    </select>

                </div>
            </div>

        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Dati nave/aereo
            <div class="row">
                <div class="col-7">
                    @error('compagnia_navale') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputCompagnia" class="col-4 float-left">Compagnia navale :</label>
                    <select  class="col-8 float-left  custom-select" style="height: 25px; vertical-align: middle; padding-top: 0px;"  wire:model="compagnia_navale">
                        <option value="0">Effettua la scelta</option>
                        @foreach ($compagnie as $compagnia)
                          <option value="{{$compagnia->nome}} {{ $compagnia_navale == $compagnia->nome ? 'selected' : '' }}">{{$compagnia->nome}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-5">
                    @error('data_arrivo_nave') <div class="ml-3"><span style="color: red;">{{ $message }}</span></div> @enderror
                    <label for="inputDataArrivo" class="col-4 float-left">Data arrivo:</label>
                    <input type="date" class="col-8 float-left form-control p-1" style="height: 20px" id="inputDataArrivo"  wire:model="data_arrivo_nave">

                </div>
                <div class="col-7">
                    @error('nome_nave') <div class="ml-3"><span style="color: red">{{ $message }}</span> </div>@enderror
                    <label for="inputNomeNave" class="col-4 float-left">Nome nave :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputNomeNave" wire:model="nome_nave">

                </div>
            </div>
        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Dati OBL/AWB
            <div class="row">
                <div class="col-7">
                    @error('numero_obl') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputOBL" class="col-5 float-left">Numero OBL/AWB :</label>
                    <input type="text" class="col-6 form-control float-left p-1" style="height: 20px" id="inputOBL" wire:model="numero_obl">

                </div>
                <div class="col-5">
                    @error('container_nr') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputContainer" class="col-6 float-left">Container n° :</label>
                    <input type="text" class="col-5 float-left form-control p-1" style="height: 20px" id="inputContainer" wire:model="container_nr">

                </div>
                <div class="col-4">
                    @error('cartoni') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputCartoni" class="col-7 float-left">Numero cartoni :</label>
                    <input type="number" class="col-5 form-control float-left p-1" style="height: 20px" id="inputCartoni" wire:model="cartoni">

                </div>
                <div class="col-4">
                    @error('lordo') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputLordo" class="col-5 float-left">Peso lordo :</label>
                    <input type="number" class="col-6 float-left form-control" style="height: 20px" id="inputLordo" wire:model="lordo">

                </div>
                <div class="col-4">
                    @error('cubatura') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputCubatura" class="col-5 float-left">Cubatura :</label>
                    <input type="number" class="col-6 float-left form-control" style="height: 20px" id="inputCubatura" wire:model="cubatura">

                </div>
                <div class="col-5">
                    @error('data_carico') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputDataCarico" class="col-5 float-left">Data carico :</label>
                    <input type="date" class="col-6 form-control float-left p-1" style="height: 20px" id="inputDataCarico" wire:model="data_carico">

                </div>
                <div class="col-7">
                    @error('destinatario') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputDestinatario" class="col-4 float-left">Destinatario :</label>
                    <select class="col-7 float-left  custom-select" style="height: 25px; vertical-align: middle; padding-top: 0px;"  wire:model="destinatario">
                        <option value="0">Effettua la scelta</option>
                        @foreach ($destinatari as $destinatario)
                          <option value="{{$destinatario->soprannome}} {{ $destinatario == $destinatario->soprannome ? 'selected' : '' }}">{{$destinatario->soprannome}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-6">
                    @error('tipo_container') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputTipoContainer" class="col-4 float-left">Tipo container :</label>
                    <select  class="col-8 float-left  custom-select" style="height: 25px; vertical-align: middle; padding-top: 0px;"  wire:model="tipo_container">
                        <option value="0">Effettua la scelta</option>
                        @foreach ($containers as $container)
                          <option value="{{$container->tipo}} {{ $tipo_container == $container->tipo ? 'selected' : '' }}">{{$container->tipo}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-6">
                    @error('sigillo') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputSigillo" class="col-4 float-left">Sigillo :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" id="inputSigillo" wire:model="sigillo">

                </div>
            </div>
        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Posizionamento
            <div class="row">
                <div class="col-6">
                    @error('trasportatore') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputTrasportatore" class="col-4 float-left">Trasportatore :</label>
                    <select class="col-7 float-left  custom-select" style="height: 25px; vertical-align: middle; padding-top: 0px;"  wire:model="trasportatore">
                        <option value="0">Effettua la scelta</option>
                        @foreach ($trasportatori as $trasportatore)
                          <option value="{{$trasportatore->soprannome}} {{ $trasportatore == $trasportatore->soprannome ? 'selected' : '' }}">{{$trasportatore->soprannome}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-6">
                    @error('luogo_consegna') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputConsegna" class="col-6 float-left">Luogo consegna :</label>
                    <select class="col-5 float-left  custom-select" style="height: 25px; vertical-align: middle; padding-top: 0px;"  wire:model="luogo_consegna">
                        <option value="0">Effettua la scelta</option>
                        @foreach ($consegne as $consegna)
                          <option value="{{$consegna->soprannome}} {{ $luogo_consegna == $consegna->soprannome ? 'selected' : '' }}">{{$consegna->soprannome}}</option>
                        @endforeach
                    </select>

                </div>
            </div>
        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Diritti doganali / certificati / pratica
            <div class="row">
                <div class="col-7">
                    @error('pratica_nr') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputPratica" class="col-5 float-left">Numero pratica :</label>
                    <input type="text" class="col-6 form-control float-left p-1" style="height: 20px" id="inputPratica" wire:model="pratica_nr">

                </div>
                <div class="col-5">
                    @error('data_pratica') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputDataPratica" class="col-6 float-left">Data pratica :</label>
                    <input type="date" class="col-5 float-left form-control p-1" style="height: 20px" id="inputDataPratica" wire:model="data_pratica">

                </div>
                <div class="col-6">
                    @error('tot_diritti') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputDiritti" class="col-5 float-left">Tot diritti doganali :</label>
                    <input type="number" class="col-7 form-control float-left p-1" style="height: 20px" id="inputDiritti" wire:model="tot_diritti">

                </div>
                <div class="col-6">
                    @error('tot_iva') <div class="ml-3"><span style="color: red">{{ $message }}</span> </div>@enderror
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
                    @error('dogana_t1') <div class="ml-3"><span style="color: red">{{ $message }}</span> </div>@enderror
                    <label for="inputDoganaT1" class="col-3 float-left">Dogana per T1 :</label>
                    <select class="col-9 float-left  custom-select" style="height: 25px; vertical-align: middle; padding-top: 0px;"  wire:model="dogana_t1">
                        <option value="0">Effettua la scelta</option>
                        @foreach ($dogane as $dogana)
                          <option value="{{$dogana->soprannome}} {{ $dogana_t1 == $dogana->soprannome ? 'selected' : '' }}">{{$dogana->soprannome}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-6">
                    @error('dogana_sdoganamento') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputDoganaSdoganamento" class="col-6 float-left">Dogana sdoganamento :</label>
                    <select class="col-6 float-left  custom-select" style="height: 25px; vertical-align: middle; padding-top: 0px;"  wire:model="dogana_sdoganamento">
                        <option value="0">Effettua la scelta</option>
                        @foreach ($dogane as $dogana)
                          <option value="{{$dogana->soprannome}} {{ $dogana_sdoganamento == $dogana->soprannome ? 'selected' : '' }}">{{$dogana->soprannome}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-6">
                    @error('luogo_sdoganamento') <div class="ml-3"><span style="color: red">{{ $message }}</span></div> @enderror
                    <label for="inputConsegna" class="col-6 float-left">Luogo sdoganamento :</label>
                    <select class="col-5 float-left  custom-select" style="height: 25px; vertical-align: middle; padding-top: 0px;"  wire:model="luogo_sdoganamento">
                        <option value="0">Effettua la scelta</option>
                        @foreach ($consegne as $consegna)
                          <option value="{{$consegna->soprannome}} {{ $luogo_sdoganamento == $consegna->soprannome ? 'selected' : '' }}">{{$consegna->soprannome}}</option>
                        @endforeach
                    </select>

                </div>
            </div>
        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">
            <div class="row">
                <div class="col-12">
                    @error('allegati') <div class="ml-3"><span style="color: red">{{ $message }}</span> </div>@enderror
                    <label for="allegati" class="col-3 float-left">Documenti allegati :</label>
                    <input type="text" class="col-9 float-left form-control p-1" style="height: 20px" id="inputSigillo" wire:model="allegati">

                </div>
                <div class="col-2">
                        <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="bl">B/L</button>
                </div>
                <div class="col-2">
                        <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="fattura">Fattura</button>
                </div>
                <div class="col-2">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="pkl">Pkl</button>
                </div>
                <div class="col-2">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="conferma_ordine">Con. ord.</button>
                </div>
                <div class="col-2">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="distinta">Distinta</button>
                </div>
                <div class="col-2">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="delega">Delega</button>
                </div>
                <div class="col-2">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="dichiarazione_conformita">Dic. conf.</button>
                </div>
                <div class="col-2">
                    <button  class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="elenco_sanitari">El. sanit.</button>
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
