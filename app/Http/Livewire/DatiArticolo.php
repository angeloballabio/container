<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Articoli;
use App\Fornitore;
use App\Operazione;

class DatiArticolo extends Component
{
    /* public $id; */
    public $articolo_id = 0;
    public $descrizione_uk, $descrizione_it, $tot_pezzi, $tot_colli, $tot_lordo, $tot_netto, $tot_valore, $ordine_id, $voce_doganale, $diritti_doganali=0, $val_iva=0, $aliquota_iva=0, $acciaio, $acciaio_inox, $plastica, $legno, $bambu, $vetro, $ceramica, $carta, $pietra, $posateria, $attrezzi_cucina, $richiede_ce, $richiede_age, $richiede_cites,$fornitore_id;

    protected $listeners = [
        'ArticoloSelezionato' => 'articoloSelezionato',
    ];

    protected $rules = [
        'descrizione_uk' => 'required|string|max:255',
        'descrizione_it' => 'required|string|max:255',
        'voce_doganale' => 'required|string|max:12',
        'diritti_doganali' => 'nullable|numeric',
        'val_iva' => 'nullable|numeric',
        'aliquota_iva' => 'nullable|numeric',
    ];

    public function mount($id)
    {
        $this->ordine_id = $id;
        $operazione = Operazione::where('id','=',$id)->get()->first();
        $fornitore = Fornitore::where('soprannome','=',$operazione->nome_fornitore)->get()->first();
        $this->fornitore_id = $fornitore->id;
    }

    public function articoloSelezionato($articoloId){
        $this->articolo_id = $articoloId;
        $articolo = Articoli::where('id',$this->articolo_id)->get()->first();
        if($articolo){
            $this->descrizione_uk = $articolo->descrizione_uk;
            $this->descrizione_it = $articolo->descrizione_it;
            $this->tot_pezzi = $articolo->tot_pezzi;
            $this->tot_colli = $articolo->tot_colli;
            $this->tot_lordo = $articolo->tot_lordo;
            $this->tot_netto = $articolo->tot_netto;
            $this->tot_valore = $articolo->tot_valore;
            $this->ordine_id = $articolo->ordine_id;
            $this->voce_doganale = $articolo->voce_doganale;
            $this->diritti_doganali = $articolo->diritti_doganali;
            $this->val_iva = $articolo->val_iva;
            $this->aliquota_iva = $articolo->aliquota_iva;
            $this->acciaio = $articolo->acciaio == 1 ? 'true':'';
            $this->acciaio_inox = $articolo->acciaio_inox == 1 ? 'true':'';
            $this->plastica = $articolo->plastica == 1 ? 'true':'';
            $this->legno = $articolo->legno == 1 ? 'true':'';
            $this->bambu = $articolo->bambu == 1 ? 'true':'';
            $this->vetro = $articolo->vetro == 1 ? 'true':'';
            $this->ceramica = $articolo->ceramica == 1 ? 'true':'';
            $this->carta = $articolo->carta == 1 ? 'true':'';
            $this->pietra = $articolo->pietra == 1 ? 'true':'';
            $this->posateria = $articolo->posateria == 1 ? 'true':'';
            $this->attrezzi_cucina = $articolo->attrezzi_cucina == 1 ? 'true':'';
            $this->richiede_ce = $articolo->richiede_ce == 1 ? 'true':'';
            $this->richiede_age = $articolo->richiede_age == 1 ? 'true':'';
            $this->richiede_cites = $articolo->richiede_cites == 1 ? 'true':'';
            $this->fornitore_id = $articolo->fornitore_id;
        }
    }

    public function aggiungi()
    {
        $data = $this->validate($this->rules);

        /* $articolo = tap(new Articoli($data))->save(); */
        $articolo = new Articoli();
        $articolo->descrizione_uk = $this->descrizione_uk;
        $articolo->descrizione_it = $this->descrizione_it;
        $articolo->tot_pezzi = $this->tot_pezzi == null ? 0:$this->tot_pezzi;
        $articolo->tot_colli = $this->tot_colli == null ? 0:$this->tot_colli;
        $articolo->tot_lordo = $this->tot_lordo == null ? 0:$this->tot_lordo;
        $articolo->tot_netto = $this->tot_netto == null ? 0:$this->tot_netto;
        $articolo->tot_valore = $this->tot_valore == null ? 0:$this->tot_valore;
        $articolo->ordine_id = $this->ordine_id;
        $articolo->voce_doganale = $this->voce_doganale;
        $articolo->diritti_doganali = $this->diritti_doganali == null ? 0.00:$this->diritti_doganali;
        $articolo->val_iva = $this->val_iva == null ? 0:$this->val_iva;
        $articolo->aliquota_iva = $this->aliquota_iva == null ? 0:$this->aliquota_iva;
        $articolo->acciaio = $this->acciaio == true ? '1':'0';
        $articolo->acciaio_inox = $this->acciaio_inox == true ? '1':'0';
        $articolo->plastica = $this->plastica == true ? '1':'0';
        $articolo->legno = $this->legno == true ? '1':'0';
        $articolo->bambu = $this->bambu == true ? '1':'0';
        $articolo->vetro = $this->vetro == true ? '1':'0';
        $articolo->ceramica = $this->ceramica == true ? '1':'0';
        $articolo->carta = $this->carta == true ? '1':'0';
        $articolo->pietra = $this->pietra == true ? '1':'0';
        $articolo->posateria = $this->posateria == true ? '1':'0';
        $articolo->attrezzi_cucina = $this->attrezzi_cucina == true ? '1':'0';
        $articolo->richiede_ce = $this->richiede_ce == true ? '1':'0';
        $articolo->richiede_age = $this->richiede_age == true ? '1':'0';
        $articolo->richiede_cites = $this->richiede_cites == true ? '1':'0';
        $articolo->fornitore_id = $this->fornitore_id;
        $articolo->save();
        $id = $this->ordine_id;
        return redirect(route('distinta',compact('id')));
    }

    public function modifica()
    {
        $this->validate($this->rules);
        $articolo = Articoli::where('id',$this->articolo_id)->get()->first();

        $articolo->descrizione_uk = $this->descrizione_uk;
        $articolo->descrizione_it = $this->descrizione_it;
        $articolo->tot_pezzi = $this->tot_pezzi;
        $articolo->tot_colli = $this->tot_colli;
        $articolo->tot_lordo = $this->tot_lordo;
        $articolo->tot_netto = $this->tot_netto;
        $articolo->tot_valore = $this->tot_valore;
        $articolo->ordine_id = $this->ordine_id;
        $articolo->voce_doganale = $this->voce_doganale;
        $articolo->diritti_doganali = $this->diritti_doganali;
        $articolo->val_iva = $this->val_iva;
        $articolo->aliquota_iva = $this->aliquota_iva;
        $articolo->acciaio = $this->acciaio == true ? '1':'0';
        $articolo->acciaio_inox = $this->acciaio_inox == true ? '1':'0';
        $articolo->plastica = $this->plastica == true ? '1':'0';
        $articolo->legno = $this->legno == true ? '1':'0';
        $articolo->bambu = $this->bambu == true ? '1':'0';
        $articolo->vetro = $this->vetro == true ? '1':'0';
        $articolo->ceramica = $this->ceramica == true ? '1':'0';
        $articolo->carta = $this->carta == true ? '1':'0';
        $articolo->pietra = $this->pietra == true ? '1':'0';
        $articolo->posateria = $this->posateria == true ? '1':'0';
        $articolo->attrezzi_cucina = $this->attrezzi_cucina == true ? '1':'0';
        $articolo->richiede_ce = $this->richiede_ce == true ? '1':'0';
        $articolo->richiede_age = $this->richiede_age == true ? '1':'0';
        $articolo->richiede_cites = $this->richiede_cites == true ? '1':'0';
        $articolo->fornitore_id = $this->fornitore_id;
        $articolo->save();
        $id = $this->ordine_id;
        return redirect(route('distinta',compact('id')));
    }

    public function cancella()
    {
        $articolo = Articoli::where('id',$this->articolo_id)->get()->first();
        $articolo->delete();
        $id = $this->ordine_id;
        return redirect(route('distinta',compact('id')));
    }

    public function render()
    {
        return view('livewire.dati-articolo');
    }
}
