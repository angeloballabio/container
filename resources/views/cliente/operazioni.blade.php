@extends('layouts.app')

@section('content')
<h1 class="text-center">Inserimento operazioni</h1>
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 " style="border-style: solid;">

        <table  style="width: 100%; border-collapse: collapse; border: 1px solid black; ">
            {{-- class="table  table-light " --}}
            <thead>
                <tr>
                    <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Pratica</th>
                    <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Container</th>
                    <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Destinatario</th>
                    <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Data arrivo nave</th>
                    <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Cartoni</th>
                    <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Lordo</th>
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
                    <label for="inputFattura" class="col-5 float-left">Data fattura :</label>
                    <input type="date" class="col-6 float-left form-control p-1"  style="height: 20px"id="inputData">
                </div>
                <div class="col-7">
                    <label for="inputFattura" class="col-4 float-left">Fornitore :</label>
                    <input type="text" class="col-7 form-control float-left p-1"  style="height: 20px" id="inputFornitore" placeholder="Fornitore°">
                </div>
                <div class="col-5">
                    <label for="inputFattura" class="col-5 float-left">Valuta :</label>
                    <input type="text" class="col-6 float-left form-control p-1" style="height: 20px" id="inputValuta">
                </div>
              </div>

        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Dati nave/aereo
            <div class="row">
                <div class="col-7">
                    <label for="inputFattura" class="col-4 float-left">Compagnia navale :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputCompagnia" placeholder="compagnia">
                </div>
                <div class="col-5">
                    <label for="inputFattura" class="col-6 float-left">Data arrivo nave :</label>
                    <input type="date" class="col-5 float-left form-control p-1" style="height: 20px" id="inputDataArrivo">
                </div>
                <div class="col-7">
                    <label for="inputFattura" class="col-4 float-left">Nome nave :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputNomeNave" placeholder="Nome nave°">
                </div>
                {{-- <div class="col-5">
                    <label for="inputFattura" class="col-5 float-left">Valuta :</label>
                    <input type="text" class="col-6 float-left form-control" id="inputValuta">
                </div> --}}
              </div>

        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Dati OBL/AWB
            <div class="row">
                <div class="col-7">
                    <label for="inputFattura" class="col-5 float-left">Numero OBL/AWB :</label>
                    <input type="text" class="col-6 form-control float-left p-1" style="height: 20px" id="inputOBL" placeholder="numero obl/awb">
                </div>
                <div class="col-5">
                    <label for="inputFattura" class="col-6 float-left">Container n° :</label>
                    <input type="text" class="col-5 float-left form-control p-1" style="height: 20px" id="inputContainer" placeholder="Container" >
                </div>
                <div class="col-4">
                    <label for="inputFattura" class="col-7 float-left">Numero cartoni :</label>
                    <input type="text" class="col-5 form-control float-left p-1" style="height: 20px" id="inputCartoni" placeholder="Cartoni">
                </div>
                <div class="col-4">
                    <label for="inputFattura" class="col-5 float-left">Peso lordo :</label>
                    <input type="text" class="col-6 float-left form-control" style="height: 20px" id="inputLordo" placeholder="Lordo">
                </div>
                <div class="col-4">
                    <label for="inputFattura" class="col-5 float-left">Cubatura :</label>
                    <input type="text" class="col-6 float-left form-control" style="height: 20px" id="inputCubatura" placeholder="Cubatura">
                </div>
                <div class="col-5">
                    <label for="inputFattura" class="col-5 float-left">Data carico :</label>
                    <input type="date" class="col-6 form-control float-left p-1" style="height: 20px" id="inputDataCarico">
                </div>
                <div class="col-7">
                    <label for="inputFattura" class="col-4 float-left">Destinatario :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" id="inputDestinatario" placeholder="Cubatura">
                </div>
                <div class="col-6">
                    <label for="inputFattura" class="col-5 float-left">Tipo container :</label>
                    <input type="text" class="col-6 form-control float-left p-1" style="height: 20px" id="inputTipoContainer">
                </div>
                <div class="col-6">
                    <label for="inputFattura" class="col-4 float-left">Sigillo :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" id="inputSigillo" placeholder="Sigillo n°">
                </div>
            </div>
        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Posizionamento
            <div class="row">
                <div class="col-6">
                    <label for="inputFattura" class="col-4 float-left">Trasportatore :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputTrasportatore" placeholder="Trasportatore">
                </div>
                <div class="col-6">
                    <label for="inputFattura" class="col-6 float-left">Luogo consegna :</label>
                    <input type="text" class="col-5 float-left form-control p-1" style="height: 20px" id="inputConsegna" placeholder="Consegna">
                </div>
              </div>
        </div>
        <div class="shadow p-2 mb-2 bg-white rounded">Diritti doganali / certificati / pratica
            <div class="row">
                <div class="col-7">
                    <label for="inputFattura" class="col-5 float-left">Numero pratica :</label>
                    <input type="text" class="col-6 form-control float-left p-1" style="height: 20px" id="inputPratica" placeholder="numero pratica">
                </div>
                <div class="col-5">
                    <label for="inputFattura" class="col-6 float-left">Data pratica :</label>
                    <input type="date" class="col-5 float-left form-control p-1" style="height: 20px" id="inputDataPratica">
                </div>
                <div class="col-6">
                    <label for="inputFattura" class="col-5 float-left">Tot diritti doganali :</label>
                    <input type="text" class="col-7 form-control float-left p-1" style="height: 20px" id="inputDiritti" placeholder="diritti">
                </div>
                <div class="col-6">
                    <label for="inputFattura" class="col-5 float-left">Tot iva :</label>
                    <input type="text" class="col-7 float-left form-control" style="height: 20px" id="inputLordo" placeholder="iva">
                </div>
                <div class="col-2">
                    <label for="inputFattura" class="col-9 float-left">Sanitario :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputSanitario">
                </div>
                <div class="col-4">
                    <label for="inputFattura" class="col-8 float-left">Sanitari emessi n° :</label>
                    <input type="text" class="col-4 form-control float-left p-1" style="height: 20px" id="inputNumneroSanitari">
                </div>
                <div class="col-2">
                    <label for="inputFattura" class="col-6 float-left">CE :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputCe">
                </div>
                <div class="col-2">
                    <label for="inputFattura" class="col-8 float-left">CITES :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputCites">
                </div>
                <div class="col-2">
                    <label for="inputFattura" class="col-7 float-left">AGE :</label>
                    <input type="checkbox" class="col-1 float-left form-control" style="height: 20px" id="inputAge">
                </div>
                <div class="col-11">
                    <label for="inputFattura" class="col-3 float-left">Dogana per t1 :</label>
                    <input type="text" class="col-9 float-left form-control p-1" style="height: 20px" id="inputDoganaT1" placeholder="Dogana T1">
                </div>

            </div>
        </div>
      </div>
    </div>
    </div>
  </div>
@endsection
