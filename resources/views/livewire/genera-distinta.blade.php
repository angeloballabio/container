<div>
    <h1 class="text-center">Genera distinta</h1>
    <div class="container-fluid">
        <div class="shadow p-2 mb-2 bg-gray-200 rounded">
            <div class="row">
                <div class="col-3">
                    <label for="container" class="col-4 float-left">Container :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" {{-- value="{{ $operazione->container_nr }}" --}}>
                </div>
                <div class="col-3">
                    <label for="container" class="col-4 float-left">Pratica :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" {{-- value="{{ $operazione->container_nr }}" --}}>
                </div>
                <div class="col-3">
                    <label for="container" class="col-4 float-left">Destinatario :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" {{-- value="{{ $operazione->container_nr }}" --}}>
                </div>
                <div class="col-3">
                    <label for="container" class="col-4 float-left">Fornitore :</label>
                    <input type="text" class="col-8 float-left form-control p-1" style="height: 20px" {{-- value="{{ $operazione->container_nr }}" --}}>
                </div>
                <div class="col-3">
                    <label for="container" class="col-5 float-left">Totale colli B/L :</label>
                    <input type="text" class="col-7 float-left form-control p-1" style="height: 20px" {{-- value="{{ $operazione->container_nr }}" --}}>
                </div>
                <div class="col-2">

                </div>
                <div class="col-3">
                    <label for="container" class="col-5 float-left">Totale lordo B/L :</label>
                    <input type="text" class="col-6 float-left form-control p-1" style="height: 20px" {{-- value="{{ $operazione->container_nr }}" --}}>
                </div>
                <div class="col-3">

                </div>
                <div class="col-3">
                    <label for="container" class="col-5 float-left">Totale colli distinta :</label>
                    <input type="text" class="col-7 float-left form-control p-1" style="height: 20px" {{-- value="{{ $operazione->container_nr }}" --}}>
                </div>
                <div class="col-2">
                    <label for="container" class="col-8 float-left">Totale pezzi distinta :</label>
                    <input type="text" class="col-4 float-left form-control p-1" style="height: 20px" {{-- value="{{ $operazione->container_nr }}" --}}>
                </div>
                <div class="col-3">
                    <label for="container" class="col-5 float-left">Totale lordo distinta :</label>
                    <input type="text" class="col-6 float-left form-control p-1" style="height: 20px" {{-- value="{{ $operazione->container_nr }}" --}}>
                </div>
                <div class="col-2">
                    <label for="container" class="col-8 float-left">Totale netto distinta :</label>
                    <input type="text" class="col-4 float-left form-control p-1" style="height: 20px" {{-- value="{{ $operazione->container_nr }}" --}}>
                </div>
                <div class="col-2">
                    <label for="container" class="col-8 float-left">Valore merce distinta :</label>
                    <input type="text" class="col-4 float-left form-control p-1" style="height: 20px" {{-- value="{{ $operazione->container_nr }}" --}}>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 " style="border-style: solid; height: 400px;">
                <livewire:elenco-articoli />
            </div>
            <div class="col-sm-4 " style="border-style: solid; height: 400px;">
                <livewire:elenco-pezzi />
            </div>
            <div class="col-sm-8 " style="border-style: solid; height: 300px;">
                <livewire:dati-articolo />
            </div>
        </div>
    </div>
</div>
