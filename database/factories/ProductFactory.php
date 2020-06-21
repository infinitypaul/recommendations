<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$weather = ["clear", "isolated-clouds", "scattered-clouds", "overcast", "light-rain", "moderate-rain", "heavy-rain", "sleet", "light-snow", "moderate-snow", "heavy-snow", "fog"];

$factory->define(Product::class, function (Faker $faker) use ($weather) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomFloat(2, 10, 9999),
        'tags' => implode(" ", $faker->randomElements($weather, 3))
    ];
});
