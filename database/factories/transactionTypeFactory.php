<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\transactionType;
use Faker\Generator as Faker;

$factory->define(transactionType::class, function (Faker $faker) {
    return [
        'label'=>"Achat"
    ];
});
