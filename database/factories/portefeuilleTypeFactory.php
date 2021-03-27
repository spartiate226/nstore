<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\portefeuilleType;
use Faker\Generator as Faker;

$factory->define(portefeuilleType::class, function (Faker $faker) {
    return [
        'label'=>"boutique"
    ];
});
