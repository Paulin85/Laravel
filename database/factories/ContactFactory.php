<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    $Nom = $faker->word();
    $Prenom = $faker->word();
    $Mail = $faker->word();
    $Numero = $faker->year();
    return [
        'Nom' => $Nom,
        'Prenom' => $Prenom,
        'Mail' => $Mail,
        'Numero' => $Numero,

    ];
});

