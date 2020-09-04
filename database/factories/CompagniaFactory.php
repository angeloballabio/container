<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Compagnia;
use Faker\Generator as Faker;

$factory->define(Compagnia::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\it_IT\Person($faker));

    return [
        'nome' => $faker->unique()->company,
        'indirizzo_web' => $faker->unique()->url,
        'contatto' => $faker->name(null),
    ];
});
