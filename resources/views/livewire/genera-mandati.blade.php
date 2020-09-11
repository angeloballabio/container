<div>
    <h1 class="text-center">Genera mandati</h1>
    <div class="col-12 row d-flex justify-content-between">
        <div class="col-gap-1 col-4" text-align: left">
            <img class="img-thumbnail" src="/immagini/logo3.jpg" alt="logo" style="width: 500px;">
            <p>Via della speranza, 135, 20131 Milano
            <br>Tel. 12345678, 2387645 r.a.
            </p>
        </div>
        <div class="col-4 col-span-5">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 30px">Spettabile ditta</h5>
                  <p class="card-text" style="font-size: 20px">{{ $nome_dogana }}<br>
                     {{ $indirizzo_dogana }}, {{ $numero_dogana }}<br>
                    {{ $cap_dogana }} {{ $luogo_dogana }} {{ $provincia_dogana }}
                    </p>
                </div>
              </div>
        </div>
    </div>
    <p style="font-size: 20px;" class="p-2">Milano, {{ $oggi }}</p>
    <h6 class="text-center" style="font-size: 20px; font-style: "><u>Oggetto import da: Cina</u></h6>
    <p style="font-size: 20px;">Pratica numero : {{ $pratica }}</p>
    <div class="text-center">
        <p style="font-size: 25px;">In allegato documentazione per emissione T1 diretto al nostro magazzino presso:</p>
        <p style="font-size: 30px;"><b>{{ $nome_dogana_arrivo }}<br>
        {{ $indirizzo_dogana_arrivo }} , {{ $numero_dogana_arrivo }}<br>
        {{ $cap_dogana_arrivo }} , {{ $luogo_dogana_arrivo }} , {{ $provincia_dogana_arrivo }}</b></p>
    </div>

</div>
