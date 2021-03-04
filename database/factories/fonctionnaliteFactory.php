<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\fonctionnalite;
use Faker\Generator as Faker;

$factory->define(fonctionnalite::class, function (Faker $faker) {
    return [
        "nom"=>"default"
    ];
});
