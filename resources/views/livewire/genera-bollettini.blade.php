<div class="container">
    <h1 class="text-center">Bollettino di consegna</h1>

    <div class="col-12 row d-flex justify-content-between">
        <div class="card" style="width: 30rem;">
            <img class="img-thumbnail" src="/immagini/logo3.jpg" alt="logo" style="width: 500px;">
            <div class="card-body">
              <h5 class="card-title">Il Doganalista</h5>
              <p class="card-text">Via della speranza, 135, 20131 Milano<br>
                Tel. 12345678, 2387645 r.a.<br>
                Albo Spedizionieri CCIA Milano 12345 P.I. 123456789012
                </p>

            </div>
          </div>
        <div class="col-4 col-span-5">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 30px">Spettabile ditta</h5>
                  <p class="card-text" style="font-size: 20px">{{ $nome_trasportatore }}<br>
                     {{ $indirizzo_trasportatore }}, {{ $numero_trasportatore }}<br>
                    {{ $cap_trasportatore }} {{ $luogo_trasportatore }} {{ $provincia_trasportatore }}
                    </p>
                </div>
              </div>
        </div>
    </div>
    <p style="font-size: 20px;" class="p-2">Milano, {{ $oggi }}</p>
    {{-- <h6 class="text-center" style="font-size: 20px; font-style: "><u>Oggetto import da: {{ $paese_provenienza }}</u></h6> --}}
    <p style="font-size: 20px;">Pratica numero : {{ $pratica }}</p>
    <div class="text-center">
        <p style="font-size: 25px;">Buongiorno, il container si recherà per dogana presso:</p>
        <p style="font-size: 30px;"><b>{{ $nome_dogana_arrivo }}<br>
        {{ $indirizzo_dogana_arrivo }} , {{ $numero_dogana_arrivo }}<br>
        {{ $cap_dogana_arrivo }} , {{ $luogo_dogana_arrivo }} , {{ $provincia_dogana_arrivo }}</b></p>
    </div>
    <div>
        <p style="font-size: 20px;">A dogana terminata posizionare il container presso:</p>
        <div class="text-center">
            <p style="font-size: 30px;"><b>{{ $nome_destinatario }}<br>
            {{ $indirizzo_destinatario }} , {{ $numero_destinatario }}<br>
            {{ $cap_destinatario }} , {{ $luogo_destinatario }} , {{ $provincia_destinatario }}</b></p>
        </div>
    </div>
    <div>
        <p style="font-size: 20px;">Dati spedizione :</p>
        <div class="text-center">
            <p style="font-size: 30px;"><b>Container : {{ $container }}, Sigillo : {{ $sigillo }}<br>
            {{ $tipo_container }}, {{ $cartoni }} CRTS, {{ $lordo }} KGS, {{ $cubatura }} CBM<br>
            Nave : {{ $nave }}, Data prevista arrivo : {{ $data_arrivo_nave }}
            </b></p>
        </div>
    </div>
    <div>
        <p style="font-size: 40px;"><b>Documenti da ritirare presso : {{ $dogana_partenza }}</b></p>
    </div>
    <div>
        <p style="font-size: 20px;">Grazie e distinti saluti</p>
    </div>
    <div class="col-gap-1 col-4 float-right">
        <h2 class="text-center">Il Doganalista</h2>
        <p class="text-center">Via della speranza, 135, 20131 Milano<br>
            Tel. 12345678, 2387645 r.a.<br>
            Albo Spedizionieri CCIA Milano 12345<br>
            P.I. 123456789012
        </p>
        <img class="img-thumbnail" src="/immagini/firma1.png" alt="logo" style="width: 280px; position: absolute; left:50px; top:0px; background-color:transparent;">
    </div>
</div>
