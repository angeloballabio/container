<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Consegna;
use Faker\Generator as Faker;

$factory->define(Consegna::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\it_IT\Person($faker));
    return [
        'soprannome' => $faker->unique()->firstName,
        'nome' => $faker->company,
        'indirizzo' => $faker->streetName,
        'cap' => $faker->postcode,
        'luogo' => $faker->city,
        'provincia' => $faker->stateAbbr,
        'numero' => $faker->buildingNumber,
        'stato' => $faker->country,
        'telefono1' => $faker->e164PhoneNumber ,
        'telefono2' => $faker->e164PhoneNumber,
        'mobile' => $faker->e164PhoneNumber,
        'fax' => $faker->e164PhoneNumber,
        'mail' => $faker->email,
        'piva' => $faker->ean13
    ];
});
