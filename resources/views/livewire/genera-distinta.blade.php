<div>
    <h1 class="text-center">Genera distinta</h1>
    <div class="container-fluid">
        @if($operazione)
        <div class="shadow p-2 mb-2 bg-gray-200 rounded">
            <div class="row">
                <div class="col-3">
                    <label for="container" class="col-4 float-left">Container :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" value="{{ $operazione->container_nr }}" readonly>
                </div>
                <div class="col-3">
                    <label for="container" class="col-4 float-left">Pratica :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" value="{{ $operazione->numero_pratica }}"readonly >
                </div>
                <div class="col-3">
                    <label for="container" class="col-4 float-left">Destinatario :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" value="{{ $operazione->destinatario_obl }}" readonly>
                </div>
                <div class="col-3">
                    <label for="container" class="col-4 float-left">Fornitore :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" value="{{ $operazione->nome_fornitore }}" readonly>
                </div>
                <div class="col-3">
                    <label for="container" class="col-5 float-left">Totale colli B/L :</label>
                    <input type="text" class="col-7 float-left form-control p-1" style="height: 20px" value="{{ $operazione->cartoni }}" readonly>
                </div>
                <div class="col-2">

                </div>
                <div class="col-3">
                    <label for="container" class="col-5 float-left">Totale lordo B/L :</label>
                    <input type="text" class="col-6 float-left form-control p-1" style="height: 20px" value="{{ $operazione->lordo_obl }}" readonly>
                </div>
                <div class="col-3">
                    id operazione :{{ $operazione->id }}
                </div>
                <div class="col-3">
                    <label for="container" class="col-5 float-left">Totale colli distinta :</label>
                    <input type="text" class="col-7 float-left form-control p-1" style="height: 20px" value ="{{ $totale_colli }}" readonly>
                </div>
                <div class="col-2">
                    <label for="container" class="col-8 float-left">Totale pezzi distinta :</label>
                    <input type="text" class="col-4 float-left form-control p-1" style="height: 20px" value="{{ $totale_pezzi }}" readonly>
                </div>
                <div class="col-3">
                    <label for="container" class="col-5 float-left">Totale lordo distinta :</label>
                    <input type="text" class="col-6 float-left form-control p-1" style="height: 20px" value="{{ $totale_lordo }}" readonly>
                </div>
                <div class="col-2">
                    <label for="container" class="col-8 float-left">Totale netto distinta :</label>
                    <input type="text" class="col-4 float-left form-control p-1" style="height: 20px" value="{{ $totale_netto }}" readonly>
                </div>
                <div class="col-2">
                    <label for="container" class="col-8 float-left">Valore merce distinta :</label>
                    <input type="text" class="col-4 float-left form-control p-1" style="height: 20px" value="{{ $totale_valore }}" readonly>
                </div>
            </div>
        </div>
        @else
        <div class="shadow p-2 mb-2 bg-gray-200 rounded">
            <div class="row">
                <div class="col-3">
                    <label for="container" class="col-4 float-left">Container :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" >
                </div>
                <div class="col-3">
                    <label for="container" class="col-4 float-left">Pratica :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" }>
                </div>
                <div class="col-3">
                    <label for="container" class="col-4 float-left">Destinatario :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" >
                </div>
                <div class="col-3">
                    <label for="container" class="col-4 float-left">Fornitore :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" >
                </div>
                <div class="col-3">
                    <label for="container" class="col-5 float-left">Totale colli B/L :</label>
                    <input type="text" class="col-7 float-left form-control p-1" style="height: 20px" >
                </div>
                <div class="col-2">

                </div>
                <div class="col-3">
                    <label for="container" class="col-5 float-left">Totale lordo B/L :</label>
                    <input type="text" class="col-6 float-left form-control p-1" style="height: 20px" >
                </div>
                <div class="col-3">

                </div>
                <div class="col-3">
                    <label for="container" class="col-5 float-left">Totale colli distinta :</label>
                    <input type="text" class="col-7 float-left form-control p-1" style="height: 20px" >
                </div>
                <div class="col-2">
                    <label for="container" class="col-8 float-left">Totale pezzi distinta :</label>
                    <input type="text" class="col-4 float-left form-control p-1" style="height: 20px" >
                </div>
                <div class="col-3">
                    <label for="container" class="col-5 float-left">Totale lordo distinta :</label>
                    <input type="text" class="col-6 float-left form-control p-1" style="height: 20px" >
                </div>
                <div class="col-2">
                    <label for="container" class="col-8 float-left">Totale netto distinta :</label>
                    <input type="text" class="col-4 float-left form-control p-1" style="height: 20px" >
                </div>
                <div class="col-2">
                    <label for="container" class="col-8 float-left">Valore merce distinta :</label>
                    <input type="text" class="col-4 float-left form-control p-1" style="height: 20px" >
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-sm-8 " style="border-style: solid; height: 400px;">
                {{-- <livewire:elenco-articoli /> --}}
                @livewire('elenco-articoli',['id' => $operazione->id])
            </div>
            <div class="col-sm-4 " style="border-style: solid; height: 400px;">
                {{-- <livewire:elenco-pezzi /> --}}
                @livewire('elenco-pezzi',['id' => $operazione->id])
            </div>
            <div class="col-sm-8 " style="border-style: solid; height: 310px;">
                {{-- <livewire:dati-articolo :id = "$operazione->id"> --}}
                @livewire('dati-articolo',['id' => $operazione->id])
            </div>
            <div class="col-sm-4 " style="border-style: solid; height: 310px;">
                {{-- <livewire:dati-pezzi /> --}}
                @livewire('dati-pezzi',['id' => $operazione->id])
                @livewire('azioni-distinta',['id' => $operazione->id])
                {{-- <livewire:azioni-distinta /> --}}
                </div>
            </div>
        </div>
    </div>
</div>
