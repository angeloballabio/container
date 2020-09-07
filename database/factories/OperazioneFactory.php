<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Operazione;
use Faker\Generator as Faker;

$factory->define(Operazione::class, function (Faker $faker) {
    $richiede_sanitario = $faker->boolean;
    if($richiede_sanitario == true){
        $numero_sanitari = $faker->randomNumber(1);
    } else {
        $numero_sanitari = 0;
    }

    $destinatario_obl = substr($faker->company,0,8);
    $trasportatore = substr($faker->company,0,8);
    $consegna = substr($faker->company,0,8);

    return [

        'nr_fattura' => $faker->unique()->bothify('??########'),
        'data_fattura' => $faker->date($format = 'Y-m-d', $max = '2032-12-31'),
        'nome_fornitore' => $faker->company,
        'valuta' => $faker->currencyCode,
        'numero_pratica'=> $faker->unique()->bothify('I########'),
        'compagnia_aeronavale' => $faker->company,
        'data_arrivo_nave' => $faker->date($format = 'Y-m-d', $max = '2032-12-31'),
        'nome_nave' => $faker->sentence(3),
        'numero_obl' => $faker->unique()->bothify('???########'),
        'container_nr' => $faker->unique()->bothify('???#####'),
        'cartoni' => $faker->randomNumber(4),
        'lordo_obl' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 100, $max = 28000),
        'cubatura' => $faker->randomElement($array = array('33','67','76')),
        'data_carico' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'destinatario_obl' => $destinatario_obl ,
        'trasportatore' => $trasportatore ,
        'consegna' => $consegna ,
        'data_pratica' => $faker->date($format = 'Y-m-d', $max = '2032-12-31'),
        'totale_diritti' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 100, $max = 28000),
        'totale_iva' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 100, $max = 28000),
        'richiede_sanitari' => $richiede_sanitario,
        'numero_sanitari' => $numero_sanitari,
        'richiede_ce' => $faker->boolean,
        'richiede_conformita' => $faker->boolean,
        'richiede_cites' => $faker->boolean,
        'dogana_t1' => $faker->company,
        'dogana_sdoganamento' => $faker->company,
        'magazzino' => $consegna ,
        'tipo_container' => $faker->randomElement($array = array('20','40HQ','40')),
        'sigillo' => $faker->unique()->bothify('???#####'),
    ];
});
