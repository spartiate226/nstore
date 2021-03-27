<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\livraisonStatut;
use Faker\Generator as Faker;

$factory->define(livraisonStatut::class, function (Faker $faker) {
    return [
        "label"=>"Non traité"
    ];
});
