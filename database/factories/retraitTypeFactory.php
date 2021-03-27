<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\retraitType;
use Faker\Generator as Faker;

$factory->define(retraitType::class, function (Faker $faker) {
    return [
        'label'=>"En attente"
    ];
});
