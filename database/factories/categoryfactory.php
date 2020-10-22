<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(products::class, function (Faker $faker) {
    return [
        'Code' => $faker->word,
        'Name' => $faker->name,
        'ProductLineID' => $faker->uuid,
        'Scale' => $faker->word,
        'vendor' => $faker->dateTime,
        'PdtDescription' => $faker->hexColor,
        'QtyInStock' => $faker->safeHexColor,
        'BuyPrice' => $faker->randomAscii,
        'MSRP' => $faker->sentence,
    ];
});
