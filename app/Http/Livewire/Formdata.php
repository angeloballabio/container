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
use App\ResaFattura;
/* use Illuminate\Validation\Rule; */
use Illuminate\Support\Facades\Auth;

class Formdata extends Component
{
    public $ordine_id,$user;
    public $fattura_nr, $data_fattura, $forn, $val, $compagnia_navale, $data_arrivo_nave, $nome_nave, $numero_obl, $container_nr, $cartoni, $lordo, $cubatura, $data_carico, $destinatario, $tipo_container, $sigillo, $trasportatore, $luogo_consegna, $pratica_nr, $data_pratica, $tot_diritti, $tot_iva, $sanitario, $nr_sanitari, $ce, $cites, $age, $dogana_t1, $allegati, $dogana_sdoganamento, $luogo_sdoganamento, $resa;


    protected $listeners = [
        'OrdineSelezionato' => 'ordineSelezionato',
    ];

    protected $rules = [
        'fattura_nr' => 'required|string|max:40',
        'data_fattura' => 'required|date',
        'forn' => 'required|string|max:40',
        'val' => 'required|string|max:4',
        'compagnia_navale' => 'required|string|max:40',
        'data_arrivo_nave' => 'required|date',
        'nome_nave' => 'required|string|max:90',
        'numero_obl' => 'required|string|max:40',
        'container_nr' => 'required|string|max:40',
        'cartoni' => 'required|numeric|integer',
        'lordo' => 'required|numeric',
        'cubatura' => 'required|numeric|integer',
        'data_carico' => 'required|date',
        'destinatario' => 'required|string|max:10',
        'tipo_container' => 'required|string|max:40',
        'sigillo' => 'required|string|max:40',
        'trasportatore' => 'required|string|max:20',
        'luogo_consegna' => 'required|string|max:20',
        'pratica_nr' => 'required|string|max:40',
        'data_pratica' => 'required|date',
        'tot_diritti' => 'required|numeric',
        'tot_iva' => 'required|numeric',
        'dogana_t1' => 'required|string|max:40',
        'allegati' => 'required|string|max:255',
        'dogana_sdoganamento' => 'required|string|max:40',
        'luogo_sdoganamento' => 'required|string|max:20',
        'resa' => 'required|string|max:4',
    ];

    public function ordineSelezionato($ordineId){
        $this->ordine_id = $ordineId;

        $operazione = Operazione::where('id',$this->ordine_id)->get()->first();
        if($operazione){
            $this->fattura_nr = $operazione->nr_fattura;
            $this->data_fattura = $operazione->data_fattura;
            $this->forn = $operazione->nome_fornitore;
            $this->val = $operazione->valuta;
            $this->resa = $operazione->resa;
            $this->pratica_nr = $operazione->numero_pratica;
            $this->compagnia_navale = $operazione->compagnia_aeronavale;
            $this->data_arrivo_nave = $operazione->data_arrivo_nave;
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
        $this->validate($this->rules);

        Operazione::create([
            'nr_fattura' => $this->fattura_nr,
            'data_fattura' => $this->data_fattura,
            'nome_fornitore' => $this->forn,
            'valuta' => $this->val,
            'resa' => $this->resa,
            'numero_pratica' => $this->pratica_nr,
            'compagnia_aeronavale' => $this->compagnia_navale,
            'data_arrivo_nave' => $this->data_arrivo_nave,
            'nome_nave' => $this->nome_nave,
            'numero_obl' => $this->numero_obl,
            'container_nr' => $this->container_nr,
            'cartoni' => $this->cartoni,
            'lordo_obl' => $this->lordo,
            'cubatura' => $this->cubatura,
            'data_carico' => $this->data_carico,
            'destinatario_obl' => $this->destinatario,
            'trasportatore' => $this->trasportatore,
            'consegna' => $this->luogo_consegna,
            'data_pratica' => $this->data_pratica,
            'totale_diritti' => $this->tot_diritti,
            'totale_iva' => $this->tot_iva,
            'richiede_sanitari' => $this->sanitario == true ? '1':'0',
            'numero_sanitari' => $this->nr_sanitari,
            'richiede_ce' => $this->ce == true ? '1':'0',
            'richiede_conformita' => $this->age == true ? '1':'0',
            'richiede_cites' => $this->cites == true ? '1':'0',
            'dogana_t1' => $this->dogana_t1,
            'dogana_sdoganamento' => $this->dogana_sdoganamento,
            'magazzino' => $this->luogo_sdoganamento,
            'tipo_container' => $this->tipo_container,
            'sigillo' => $this->sigillo,
            'allegati' => $this->allegati,
        ]);
        /* return redirect()->to('/operazioni'); */
        $this->emit('AggiornaOperazione');

    }

    public function modifica()
    {
        $this->validate($this->rules);

        $operazione = Operazione::where('id',$this->ordine_id)->get()->first();

        $operazione->nr_fattura = $this->fattura_nr;
        $operazione->data_fattura =$this->data_fattura;
        $operazione->nome_fornitore = $this->forn;
        $operazione->valuta = $this->val;
        $operazione->resa = $this->resa;
        $operazione->numero_pratica = $this->pratica_nr;
        $operazione->compagnia_aeronavale = $this->compagnia_navale;
        $operazione->data_arrivo_nave = $this->data_arrivo_nave;
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
        /* return redirect()->to('/operazioni'); */
        $this->emit('AggiornaOperazione');
    }

    public function cancella()
    {
        $operazione = Operazione::where('id',$this->ordine_id)->get()->first();
        $operazione->delete();
        /* return redirect()->to('/operazioni'); */
        $this->emit('AggiornaOperazione');
    }

    public function render()
    {
        $this->user = Auth::user();
        $valute = Valuta::select('iso')->orderBy('iso', 'asc')->get()->all();
        $containers = TipoContainer::select('tipo')->orderBy('tipo', 'asc')->get()->all();
        $dogane = Dogana::select('soprannome')->orderBy('soprannome', 'asc')->get()->all();
        $consegne = Consegna::select('soprannome')->orderBy('soprannome', 'asc')->get()->all();
        $trasportatori = Trasportatore::select('soprannome')->orderBy('soprannome', 'asc')->get()->all();
        $destinatari = Destinatario::select('soprannome')->orderBy('soprannome', 'asc')->get()->all();
        $compagnie = Compagnia::select('nome')->orderBy('nome', 'asc')->get()->all();
        $fornitori = Fornitore::select('soprannome')->orderBy('soprannome', 'asc')->get()->all();
        $rese = ResaFattura::select('iso')->orderBy('iso','asc')->get()->all();
        return view('livewire.formdata', compact('fornitori','compagnie','destinatari','trasportatori','consegne', 'dogane','containers', 'valute', 'rese'));
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
