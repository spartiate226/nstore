<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\role::class, function (Faker $faker) {
    return [
        "nom"=>'administrateur'
    ];
});
