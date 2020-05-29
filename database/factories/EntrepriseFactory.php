<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entreprise;
use Faker\Generator as Faker;

$factory->define(Entreprise::class, function (Faker $faker) {
    $Nom = $faker->word();
    $Domaine = $faker->word();
    $Adresse = $faker->sentence(5, true);
    $Numero = $faker->year();
    return [
        //
        'Nom' => $Nom,
        'Domaine' => $Domaine,
        'Adresse' => $Adresse,
        'Numero' => $Numero, 
    ];
});
