<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Operazione;
use App\Fornitore;
use App\Compagnia;
use App\Destinatario;
use App\Trasportatore;
use App\Consegna;
use App\Dogana;
use App\TipoContainer;
use App\Valuta;

class Formdata extends Component
{
    public $ordine_id;
    public $fattura_nr, $data_fattura, $fornitore, $valuta, $compagnia_navale, $data_attivo_nave, $nome_nave, $numero_obl, $container_nr, $cartoni, $lordo, $cubatura, $data_carico, $destinatario, $tipo_container, $sigillo, $trasportatore, $luogo_consegna, $pratica_nr, $data_pratica, $tot_diritti, $tot_iva, $sanitario, $nr_sanitari, $ce, $cites, $age, $dogana_t1, $allegati, $dogana_sdoganamento, $luogo_sdoganamento;


    protected $listeners = [
        'OrdineSelezionato' => 'ordineSelezionato',
    ];

    public function ordineSelezionato($ordineId){
        $this->ordine_id = $ordineId;

        $operazione = Operazione::where('id',$this->ordine_id)->get()->first();
        if($operazione){
            $this->fattura_nr = $operazione->nr_fattura;
            $this->data_fattura = $operazione->data_fattura;
            $this->fornitore = $operazione->nome_fornitore;
            $this->valuta = $operazione->valuta;
            $this->pratica_nr = $operazione->numero_pratica;
            $this->compagnia_navale = $operazione->compagnia_aeronavale;
            $this->data_attivo_nave = $operazione->data_arrivo_nave;
            $this->nome_nave = $operazione->nome_nave;
            $this->numero_obl = $operazione->numero_obl;
            $this->container_nr = $operazione->container_nr;
            $this->cartoni = $operazione->cartoni;
            $this->lordo = $operazione->lordo_obl;
            $this->cubatura = $operazione->cubatura;
            $this->data_carico = $operazione->data_carico;
            $this->destinatario = $operazione->destinatario_obl;
            $this->trasportatore = $operazione->trasportatore;
            $this->luogo_consegna = $operazione->consegna;
            $this->data_pratica = $operazione->data_pratica;
            $this->tot_diritti = $operazione->totale_diritti;
            $this->tot_iva = $operazione->totale_iva;
            $this->sanitario = $operazione->richiede_sanitari == 1 ? 'true':'';
            $this->nr_sanitari = $operazione->numero_sanitari;
            $this->ce = $operazione->richiede_ce == 1 ? 'true':'';
            $this->age = $operazione->richiede_conformita == 1 ? 'true':'';
            $this->cites = $operazione->richiede_cites == 1 ? 'true':'';
            $this->dogana_t1 = $operazione->dogana_t1;
            $this->dogana_sdoganamento = $operazione->dogana_sdoganamento;
            $this->luogo_sdoganamento = $operazione->magazzino;
            $this->tipo_container = $operazione->tipo_container;
            $this->sigillo = $operazione->sigillo;
            $this->allegati = $operazione->allegati;
        }

    }

    public function aggiungi()
    {
        $operazione = new Operazione();
        $operazione->nr_fattura = $this->fattura_nr;
        $operazione->data_fattura =$this->data_fattura;
        $operazione->nome_fornitore = $this->fornitore;
        $operazione->valuta = $this->valuta;
        $operazione->numero_pratica = $this->pratica_nr;
        $operazione->compagnia_aeronavale = $this->compagnia_navale;
        $operazione->data_arrivo_nave = $this->data_attivo_nave;
        $operazione->nome_nave = $this->nome_nave;
        $operazione->numero_obl = $this->numero_obl;
        $operazione->container_nr = $this->container_nr;
        $operazione->cartoni = $this->cartoni;
        $operazione->lordo_obl = $this->lordo;
        $operazione->cubatura = $this->cubatura;
        $operazione->data_carico = $this->data_carico;
        $operazione->destinatario_obl = $this->destinatario;
        $operazione->trasportatore = $this->trasportatore;
        $operazione->consegna = $this->luogo_consegna;
        $operazione->data_pratica = $this->data_pratica;
        $operazione->totale_diritti = $this->tot_diritti;
        $operazione->totale_iva = $this->tot_iva;
        $operazione->richiede_sanitari = $this->sanitario == true ? '1':'0';
        $operazione->numero_sanitari = $this->nr_sanitari;
        $operazione->richiede_ce = $this->ce == true ? '1':'0';
        $operazione->richiede_conformita = $this->age == true ? '1':'0';
        $operazione->richiede_cites = $this->cites == true ? '1':'0';
        $operazione->dogana_t1 = $this->dogana_t1;
        $operazione->dogana_sdoganamento = $this->dogana_sdoganamento;
        $operazione->magazzino = $this->luogo_sdoganamento;
        $operazione->tipo_container = $this->tipo_container;
        $operazione->sigillo = $this->sigillo;
        $operazione->allegati = $this->allegati;
        $operazione->save();
    }

    public function modifica()
    {
        $operazione = Operazione::where('id',$this->ordine_id)->get()->first();

        $operazione->nr_fattura = $this->fattura_nr;
        $operazione->data_fattura =$this->data_fattura;
        $operazione->nome_fornitore = $this->fornitore;
        $operazione->valuta = $this->valuta;
        $operazione->numero_pratica = $this->pratica_nr;
        $operazione->compagnia_aeronavale = $this->compagnia_navale;
        $operazione->data_arrivo_nave = $this->data_attivo_nave;
        $operazione->nome_nave = $this->nome_nave;
        $operazione->numero_obl = $this->numero_obl;
        $operazione->container_nr = $this->container_nr;
        $operazione->cartoni = $this->cartoni;
        $operazione->lordo_obl = $this->lordo;
        $operazione->cubatura = $this->cubatura;
        $operazione->data_carico = $this->data_carico;
        $operazione->destinatario_obl = $this->destinatario;
        $operazione->trasportatore = $this->trasportatore;
        $operazione->consegna = $this->luogo_consegna;
        $operazione->data_pratica = $this->data_pratica;
        $operazione->totale_diritti = $this->tot_diritti;
        $operazione->totale_iva = $this->tot_iva;
        $operazione->richiede_sanitari = $this->sanitario == true ? '1':'0';
        $operazione->numero_sanitari = $this->nr_sanitari;
        $operazione->richiede_ce = $this->ce == true ? '1':'0';
        $operazione->richiede_conformita = $this->age == true ? '1':'0';
        $operazione->richiede_cites = $this->cites == true ? '1':'0';
        $operazione->dogana_t1 = $this->dogana_t1;
        $operazione->dogana_sdoganamento = $this->dogana_sdoganamento;
        $operazione->magazzino = $this->luogo_sdoganamento;
        $operazione->tipo_container = $this->tipo_container;
        $operazione->sigillo = $this->sigillo;
        $operazione->allegati = $this->allegati;
        $operazione->save();
        return redirect()->to('/operazioni');
    }

    public function cancella()
    {
        $operazione = Operazione::where('id',$this->ordine_id)->get()->first();
        $operazione->delete();
        return redirect()->to('/operazioni');
    }

    public function render()
    {
        $valute = Valuta::select('iso')->orderBy('iso', 'asc')->get()->all();
        $containers = TipoContainer::select('tipo')->orderBy('tipo', 'asc')->get()->all();
        $dogane = Dogana::select('soprannome')->orderBy('soprannome', 'asc')->get()->all();
        $consegne = Consegna::select('soprannome')->orderBy('soprannome', 'asc')->get()->all();
        $trasportatori = Trasportatore::select('soprannome')->orderBy('soprannome', 'asc')->get()->all();
        $destinatari = Destinatario::select('soprannome')->orderBy('soprannome', 'asc')->get()->all();
        $compagnie = Compagnia::select('nome')->orderBy('nome', 'asc')->get()->all();
        $fornitori = Fornitore::select('soprannome')->orderBy('soprannome', 'asc')->get()->all();
        return view('livewire.formdata', compact('fornitori','compagnie','destinatari','trasportatori','consegne', 'dogane','containers', 'valute'));
    }

    public function bl()
    {
        if(! str_contains($this->allegati, 'B/L')){
            $dato = $this->allegati;
            if($dato !== ''){
                $this->allegati = $dato.', B/L';
            } else {
                $this->allegati = 'B/L';
            }

        }
    }

    public function fattura()
    {
        if(! str_contains($this->allegati, 'Fattura')){
            $dato = $this->allegati;
            if ($dato !== '') {
                $this->allegati = $dato.', Fattura';
            } else {
                $this->allegati = 'Fattura';
            }
        }
    }

    public function pkl()
    {
        if(! str_contains($this->allegati, 'Pkl')){
            $dato = $this->allegati;
            if ($dato !== '') {
                $this->allegati = $dato.', Pkl';
            } else {
                $this->allegati = 'Pkl';
            }
        }
    }

    public function conferma_ordine()
    {
        if(! str_contains($this->allegati, 'Conferma ordine')){
            $dato = $this->allegati;
            if ($dato !== '') {
                $this->allegati = $dato.', Conferma ordine';
            } else {
                $this->allegati = 'Conferma ordine';
            }
        }
    }

    public function distinta()
    {
        if(! str_contains($this->allegati, 'Distinta')){
            $dato = $this->allegati;
            if ($dato !== '') {
                $this->allegati = $dato.', Distinta';
            } else {
                $this->allegati = 'Distinta';
            }
        }
    }

    public function delega()
    {
        if(! str_contains($this->allegati, 'Delega')){
            $dato = $this->allegati;
            if ($dato !== '') {
                $this->allegati = $dato.', Delega';
            } else {
                $this->allegati = 'Delega';
            }
        }
    }

    public function dichiarazione_conformita()
    {
        if(! str_contains($this->allegati, 'Dichiarazione conformita')){
            $dato = $this->allegati;
            if ($dato !== '') {
                $this->allegati = $dato.', Dichiarazione conformita';
            } else {
                $this->allegati = 'Dichiarazione conformita';
            }
        }
    }

    public function elenco_sanitari()
    {
        if(! str_contains($this->allegati, 'Elenco sanitari')){
            $dato = $this->allegati;
            if ($dato !== '') {
                $this->allegati = $dato.', Elenco sanitari';
            } else {
                $this->allegati = 'Elenco sanitari';
            }
        }
    }
}
