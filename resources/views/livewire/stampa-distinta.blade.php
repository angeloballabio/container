<div class="container-fluid">
    <div class="row">
        <div class="col-4 ">
            <div class="card" style="width: 24rem;">
                <img class="img-thumbnail" src="/immagini/logo3.jpg" alt="logo" style="width: 250px; display: block;
                margin-left: auto;
                margin-right: auto;">
                <div class="card-body">
                    <h5 class="card-title">Il Doganalista</h5>
                    <p class="card-text">Via della speranza, 135, 20131 Milano<br>
                     Tel. 12345678, 2387645 r.a.<br>
                     Albo Spedizionieri CCIA Milano 12345 P.I. 123456789012
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 28rem;">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 30px"><b>Fornitore</b></h5>
                  <p class="card-text" style="font-size: 20px">{{ $fornitore_nome }}<br>
                     {{ $fornitore_indirizzo }}, {{ $fornitore_numero }}<br>
                    {{ $fornitore_cap }} {{ $fornitore_luogo }} {{ $fornitore_stato }}<br>
                    <b>Container : {{ $container_numero }}<br>
                    Pratica n° : {{ $pratica_numero }}<br>
                    Resa spedizione : {{ $resa }}<br>
                    Valuta fattura : {{ $valuta }}</b>
                    </p>
                </div>
              </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 28rem;">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 30px"><b>Destinatario</b></h5>
                  <p class="card-text" style="font-size: 20px">{{ $destinatario_nome }}<br>
                     {{ $destinatario_indirizzo }}, {{ $destinatario_numero }}<br>
                    {{ $destinatario_cap }} {{ $destinatario_luogo }} {{ $destinatario_stato }}<br>

                    </p>
                </div>
              </div>
        </div>
    </div>

</div>
