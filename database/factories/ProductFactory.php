<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->text(15),
        'price' => random_int(1000, 3000),
        'image' => null,
        'description' => $faker->text(200)
    ];
});
