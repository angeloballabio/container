<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Operazione;
use Faker\Generator as Faker;
use App\Fornitore;
use App\Valuta;
use App\ResaFattura;
use App\Compagnia;
use App\Destinatario;
use App\Trasportatore;
use App\Consegna;
use App\Dogana;
use App\TipoContainer;

$factory->define(Operazione::class, function (Faker $faker) {
    $richiede_sanitario = $faker->boolean;
    if($richiede_sanitario == true){
        $numero_sanitari = $faker->randomNumber(1);
    } else {
        $numero_sanitari = 0;
    }

    /* $destinatario_obl = substr($faker->company,0,8);
    $trasportatore = substr($faker->company,0,8);
    $consegna = substr($faker->company,0,8); */
    $fornitori = Fornitore::select('soprannome')->get();
    $array_fornitori = array();
    foreach($fornitori as $fornitore){
        $array_fornitori[] = $fornitore->soprannome.' ';
    }

    $valute = Valuta::select('iso')->get();
    $array_valute = array();
    foreach($valute as $valuta){
        $array_valute[] = $valuta->iso.' ';
    }

    $rese = Resa::select('iso')->get();
    $array_rese = array();
    foreach($rese as $resa){
        $array_rese[] = $resa->iso.' ';
    }

    $compagnie = Compagnia::select('nome')->get();
    $array_compagnie = array();
    foreach($compagnie as $compagnia){
        $array_compagnie[] = $compagnia->nome.' ';
    }

    $destinatari = Destinatario::select('soprannome')->get();
    $array_destinatari = array();
    foreach($destinatari as $destinatario){
        $array_destinatari[] = $destinatario->soprannome.' ';
    }

    $trasportatori = Trasportatore::select('soprannome')->get();
    $array_trasportatori = array();
    foreach($trasportatori as $trasportatore){
        $array_trasportatori[] = $trasportatore->soprannome.' ';
    }

    $consegne = Consegna::select('soprannome')->get();
    $array_consegne = array();
    foreach($consegne as $consegna){
        $array_consegne[] = $consegna->soprannome.' ';
    }

    $dogane = Dogana::select('soprannome')->get();
    $array_dogane = array();
    foreach($dogane as $dogana){
        $array_dogane[] = $dogana->soprannome.' ';
    }

    $tipicontainer = TipoContainer::select('tipo')->get();
    $array_containers = array();
    foreach($tipicontainer as $tipocontainer){
        $array_containers[] = $tipocontainer->tipo.' ' ;
    }
    $conse = $faker->randomElement($array_consegne);
    $tipo_container = $faker->randomElement($array_containers);
    $cubatura;
    $max_lordo;
    switch($tipo_container){
        case "STANDARD 20′ navale ":
            $cubatura = '32';
            $max_lordo = 18270;
        break;
        case "STANDARD 40′ navale ":
            $cubatura = '65';
            $max_lordo = 26740;
        break;
        case "HIGH CUBE 40′ navale ":
            $cubatura = '76';
            $max_lordo = 26580;
        break;
        case "OPEN TOP 20′ navale ":
            $cubatura = '31';
            $max_lordo = 18170;
        break;
        case "OPEN TOP 40′  navale ":
            $cubatura = '64';
            $max_lordo = 26680;
        break;
        case "REEFER 20′ navale ":
            $cubatura = '26';
            $max_lordo = 17090;
        break;
        case "REEFER 40′ navale ":
            $cubatura = '54';
            $max_lordo = 25080;
        break;
        case "FLAT RACK 20′ navale ":
            $cubatura = '32';
            $max_lordo = 17850;
        break;
        case "FLAT RACK 40′ navale ":
            $cubatura = '65';
            $max_lordo = 21300;
        break;
        case "FLAT RACK COLLAPSIBLE 20′ navale":
            $cubatura = '0';
            $max_lordo = 17850;
        break;
        case "FLAT RACK COLLAPSIBLE 40′ navale":
            $cubatura = '0';
            $max_lordo = 21300;
        break;
        case "Demi aereo ":
            $cubatura = '5';
            $max_lordo = 3000;
        break;
        case "HMA stall aereo ":
            $cubatura = '18';
            $max_lordo = 3500;
        break;
        case "LD-1 aereo ":
            $cubatura = '5';
            $max_lordo = 1588;
        break;
        case "LD-11 aereo ":
            $cubatura = '7';
            $max_lordo = 3176;
        break;
        case "LD-2 aereo ":
            $cubatura = '3';
            $max_lordo = 1225;
        break;
        case "LD-26 aereo ":
            $cubatura = '13';
            $max_lordo = 6033;
        break;
        case "LD-29 aereo ":
            $cubatura = '14';
            $max_lordo = 6033;
        break;
        case "LD-3 aereo ":
            $cubatura = '4';
            $max_lordo = 3500;
        break;
        case "LD-3 Reefer aereo ":
            $cubatura = '4';
            $max_lordo = 1588;
        break;
        case "LD-39 aereo ":
            $cubatura = '16';
            $max_lordo = 5033;
        break;
        case "LD-4 aereo ":
            $cubatura = '5';
            $max_lordo = 2449;
        break;
        case "LD-6 aereo ":
            $cubatura = '9';
            $max_lordo = 3175;
        break;
        case "LD-7 aereo ":
            $cubatura = '10';
            $max_lordo = 4626;
        break;
        case "LD-7 with Angled Wings aereo ":
            $cubatura = '14';
            $max_lordo = 5000;
        break;
        case "LD-7 with Folding Wings aereo ":
            $cubatura = '14';
            $max_lordo = 5000;
        break;
        case "LD-8 aereo ":
            $cubatura = '7';
            $max_lordo = 2450;
        break;
        case "LD-9 aereo ":
            $cubatura = '11';
            $max_lordo = 4600;
        break;
        case "LD-9 Reefer aereo ":
            $cubatura = '10';
            $max_lordo = 4626;
        break;
        case "M-1 aereo ":
            $cubatura = '18';
            $max_lordo = 6800;
        break;
        case "M-1H aereo ":
            $cubatura = '21';
            $max_lordo = 6800;
        break;
        case "M-2 aereo ":
            $cubatura = '34';
            $max_lordo = 11340;
        break;
        case "M-6 aereo ":
            $cubatura = '34';
            $max_lordo = 11340;
        break;
        case 'M-6 (118"H) aereo ':
            $cubatura = '40';
            $max_lordo = 11340;
        break;
        case "M-6 Twin Car Rack aereo ":
            $cubatura = '0';
            $max_lordo = 8900;
        break;
        case "MDP aereo ":
            $cubatura = '27';
            $max_lordo = 11300;
        break;
        case "PLA Half Pallet aereo ":
            $cubatura = '7';
            $max_lordo = 3175;
        break;
        case "PMC/P6P Pallet aereo ":
            $cubatura = '21';
            $max_lordo = 11300;
        break;
        case "PNA Half Pallet aereo ":
            $cubatura = '5';
            $max_lordo = 3175;
        break;
        case "Type A Pen aereo ":
            $cubatura = '16';
            $max_lordo = 3175;
        break;
        default :
            $cubatura = '0';
            $max_lordo = 100;
        break;
    }


    return [

        'nr_fattura' => $faker->unique()->bothify('??########'),
        'data_fattura' => $faker->date($format = 'Y-m-d', $max = '2021-12-31'),
        'nome_fornitore' => $faker->randomElement($array_fornitori),
        'valuta' => $faker->randomElement($array_valute),
        'resa' => $faker->randomElement($array_rese),
        'numero_pratica'=> $faker->unique()->bothify('I########'),
        'compagnia_aeronavale' => $faker->randomElement($array_compagnie),
        'data_arrivo_nave' => $faker->date($format = 'Y-m-d', $max = '2021-12-31'),
        'nome_nave' => $faker->sentence(3),
        'numero_obl' => $faker->unique()->bothify('???########'),
        'container_nr' => $faker->unique()->bothify('???#####'),
        'cartoni' => $faker->randomNumber(4),
        'lordo_obl' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 100, $max = $max_lordo),
        'cubatura' => $cubatura,
        'data_carico' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'destinatario_obl' => $faker->randomElement($array_destinatari),
        'trasportatore' => $faker->randomElement($array_trasportatori),
        'consegna' => $conse,
        'data_pratica' => $faker->date($format = 'Y-m-d', $max = '2032-12-31'),
        'totale_diritti' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 100, $max = 28000),
        'totale_iva' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 100, $max = 28000),
        'richiede_sanitari' => $richiede_sanitario,
        'numero_sanitari' => $numero_sanitari,
        'richiede_ce' => $faker->boolean,
        'richiede_conformita' => $faker->boolean,
        'richiede_cites' => $faker->boolean,
        'dogana_t1' => $faker->randomElement($array_dogane),
        'dogana_sdoganamento' => $faker->randomElement($array_dogane),
        'magazzino' => $conse,
        'tipo_container' => $tipo_container,
        'sigillo' => $faker->unique()->bothify('???#####'),
        'allegati' => 'B/L Fattura Distinta PKL Documento conformita Elenco sanitari'
    ];
});
