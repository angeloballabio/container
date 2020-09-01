<div>
    {{-- <div class="shadow p-2 mb-2 bg-white rounded"> --}}

        @if($operazione)
        {{-- {{ dd($operazione) }} --}}
        <div class="shadow p-2 mb-2 bg-white rounded">
            <div class="row">
                {{-- <div class="col-4">
                    <button type="button" name="aggiungi" id="aggiungi" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" >Aggiungi operazione</button>
                </div>
                <div class="col-4">
                    <button type="button" name="modifica" id="modifica" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Modifica operazione</button>
                </div>
                <div class="col-4">
                    <button type="button" name="cancella" id="cancella" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;">Cancella operazione</button>
                </div> --}}
                <div class="col-4">
                    <button class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" wire:click="azioneSelezionata">Genera distinta</button>
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
        {{-- {{ dd($operazione) }} --}}
        @else
        <div class="shadow p-2 mb-2 bg-white rounded">
        <div class="row">
            {{-- <div class="col-4">
                <button type="button" name="aggiungi" id="aggiungi" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" >Aggiungi operazione</button>
            </div>
            <div class="col-4">
                <button type="button" name="modifica" id="modifica" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" disabled>Modifica operazione</button>
            </div>
            <div class="col-4">
                <button type="button" name="cancella" id="cancella" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" disabled>Cancella operazione</button>
            </div> --}}
            <div class="col-4">
                <button type="button" name="generaDistinta" id="generaDistinta" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" disabled >Genera distinta</button>
            </div>
            <div class="col-4">
                <button type="button" name="generaMandati" id="generaMandati" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" disabled>Genera mandati</button>
            </div>
            <div class="col-4">
                <button type="button" name="generaBollettini" id="generaBollettini" class="btn btn-secondary btn-lg btn-block mb-1" style="height: 25px; vertical-align: middle; padding-top: 0px;" disabled>Genera bollettini</button>
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
        @endif
    {{-- </div> --}}
</div>
