<div>
    <h1 class="text-center">Inserimento operazioni</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 " style="border-style: solid;">
                <livewire:tabella />
            </div>
            <div class="col-sm-6 " style="border-style: solid;">
                <livewire:formdata />
            </div>
        </div>
    </div>
</div>
{{-- <div>
    <h1 class="text-center">Inserimento operazioni</h1>
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 " style="border-style: solid;">

        <table  style="width: 100%; border-collapse: collapse; border: 1px solid black; ">

            <thead>
                <tr>
                    <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Pratica</th>
                    <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Container</th>
                    <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Destinatario</th>
                    <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Data arrivo nave</th>
                    <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Cartoni</th>
                    <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Lordo</th>
                    <th style="border-collapse: collapse; border: 1px solid black; text-align: center;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
                      </svg></th>

                </tr>
            </thead>
            <tbody>
                @foreach($operazioni as $operazione)
                <tr>
                    <td style="border-collapse: collapse; border: 1px solid black; ">{{ $operazione->numero_pratica }}</td>
                    <td style="border-collapse: collapse; border: 1px solid black; ">{{ $operazione->container_nr }}</td>
                    <td style="border-collapse: collapse; border: 1px solid black; ">{{ $operazione->destinatario_obl }}</td>
                    <td style="border-collapse: collapse; border: 1px solid black; ">{{ $operazione->data_arrivo_nave }}</td>
                    <td style="border-collapse: collapse; border: 1px solid black; ">{{ $operazione->cartoni }}</td>
                    <td style="border-collapse: collapse; border: 1px solid black; ">{{ $operazione->lordo_obl }}</td>
                    <td style="border-collapse: collapse; border: 1px solid black; text-align: center;"><a href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
                      </svg></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $operazioni->links() }}
      </div>
      <div class="col-sm-6 " style="border-style: solid;">
        <div class="col-12">
        <div class="shadow p-2 mb-2 bg-white rounded">Dati fattura
            <div class="row">
                <div class="col-7">
                    <label for="inputFattura" class="col-4 float-left">Fattura numero :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputFattura" placeholder="fattura n°">
                </div>
                <div class="col-5">
                    <label for="inputData" class="col-5 float-left">Data fattura :</label>
                    <input type="date" class="col-6 float-left form-control p-1"  style="height: 20px"id="inputData">
                </div>
                <div class="col-7">
                    <label for="inputFornitore" class="col-4 float-left">Fornitore :</label>
                    <input type="text" class="col-7 form-control float-left p-1"  style="height: 20px" id="inputFornitore" placeholder="Fornitore°">
                </div>
                <div class="col-5">
                    <label for="inputValuta" class="col-5 float-left">Valuta :</label>
                    <input type="text" class="col-6 float-left form-control p-1" style="height: 20px" id="inputValuta">
                </div>
              </div>

        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Dati nave/aereo
            <div class="row">
                <div class="col-7">
                    <label for="inputCompagnia" class="col-4 float-left">Compagnia navale :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputCompagnia" placeholder="compagnia">
                </div>
                <div class="col-5">
                    <label for="inputDataArrivo" class="col-6 float-left">Data arrivo nave :</label>
                    <input type="date" class="col-5 float-left form-control p-1" style="height: 20px" id="inputDataArrivo">
                </div>
                <div class="col-7">
                    <label for="inputNomeNave" class="col-4 float-left">Nome nave :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputNomeNave" placeholder="Nome nave°">
                </div>
              </div>

        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Dati OBL/AWB
            <div class="row">
                <div class="col-7">
                    <label for="inputOBL" class="col-5 float-left">Numero OBL/AWB :</label>
                    <input type="text" class="col-6 form-control float-left p-1" style="height: 20px" id="inputOBL" placeholder="numero obl/awb">
                </div>
                <div class="col-5">
                    <label for="inputContainer" class="col-6 float-left">Container n° :</label>
                    <input type="text" class="col-5 float-left form-control p-1" style="height: 20px" id="inputContainer" placeholder="Container" >
                </div>
                <div class="col-4">
                    <label for="inputCartoni" class="col-7 float-left">Numero cartoni :</label>
                    <input type="text" class="col-5 form-control float-left p-1" style="height: 20px" id="inputCartoni" placeholder="Cartoni">
                </div>
                <div class="col-4">
                    <label for="inputLordo" class="col-5 float-left">Peso lordo :</label>
                    <input type="text" class="col-6 float-left form-control" style="height: 20px" id="inputLordo" placeholder="Lordo">
                </div>
                <div class="col-4">
                    <label for="inputCubatura" class="col-5 float-left">Cubatura :</label>
                    <input type="text" class="col-6 float-left form-control" style="height: 20px" id="inputCubatura" placeholder="Cubatura">
                </div>
                <div class="col-5">
                    <label for="inputDataCarico" class="col-5 float-left">Data carico :</label>
                    <input type="date" class="col-6 form-control float-left p-1" style="height: 20px" id="inputDataCarico">
                </div>
                <div class="col-7">
                    <label for="inputDestinatario" class="col-4 float-left">Destinatario :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" id="inputDestinatario" placeholder="Cubatura">
                </div>
                <div class="col-6">
                    <label for="inputTipoContainer" class="col-5 float-left">Tipo container :</label>
                    <input type="text" class="col-6 form-control float-left p-1" style="height: 20px" id="inputTipoContainer">
                </div>
                <div class="col-6">
                    <label for="inputSigillo" class="col-4 float-left">Sigillo :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" id="inputSigillo" placeholder="Sigillo n°">
                </div>
            </div>
        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Posizionamento
            <div class="row">
                <div class="col-6">
                    <label for="inputTrasportatore" class="col-4 float-left">Trasportatore :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputTrasportatore" placeholder="Trasportatore">
                </div>
                <div class="col-6">
                    <label for="inputConsegna" class="col-6 float-left">Luogo consegna :</label>
                    <input type="text" class="col-5 float-left form-control p-1" style="height: 20px" id="inputConsegna" placeholder="Consegna">
                </div>
              </div>
        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Diritti doganali / certificati / pratica
            <div class="row">
                <div class="col-7">
                    <label for="inputPratica" class="col-5 float-left">Numero pratica :</label>
                    <input type="text" class="col-6 form-control float-left p-1" style="height: 20px" id="inputPratica" placeholder="numero pratica">
                </div>
                <div class="col-5">
                    <label for="inputDataPratica" class="col-6 float-left">Data pratica :</label>
                    <input type="date" class="col-5 float-left form-control p-1" style="height: 20px" id="inputDataPratica">
                </div>
                <div class="col-6">
                    <label for="inputDiritti" class="col-5 float-left">Tot diritti doganali :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputDiritti" placeholder="diritti">
                </div>
                <div class="col-6">
                    <label for="inputLordo" class="col-5 float-left">Tot iva :</label>
                    <input type="text" class="col-7 float-left form-control" style="height: 20px" id="inputLordo" placeholder="iva">
                </div>
                <div class="col-2">
                    <label for="inputSanitario" class="col-10 float-left">Sanitario :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputSanitario">
                </div>
                <div class="col-4">
                    <label for="inputNumeroSanitari" class="col-8 float-left">Sanitari emessi n° :</label>
                    <input type="text" class="col-4 form-control float-left p-1" style="height: 20px" id="inputNumneroSanitari">
                </div>
                <div class="col-2">
                    <label for="inputCe" class="col-6 float-left">CE :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputCe">
                </div>
                <div class="col-2">
                    <label for="inputCites" class="col-8 float-left">CITES :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputCites">
                </div>
                <div class="col-2">
                    <label for="inputAge" class="col-7 float-left">AGE :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputAge">
                </div>
                <div class="col-11">
                    <label for="inputDoganaT1" class="col-3 float-left">Dogana per T1 :</label>
                    <input type="text" class="col-9 float-left form-control p-1" style="height: 20px" id="inputDoganaT1" placeholder="Dogana T1">
                </div>

            </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
 --}}
