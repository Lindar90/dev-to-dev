<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'size' => $faker->randomElement(['S', 'M', 'L', 'XL', 'XXL']),
        'color' => $faker->randomElement(['Black', 'Silver', 'Grey']),
        'brand' => $faker->randomElement(['Lacoste', 'Nike', 'Zara', 'Timberland']),
        'image' => $faker->imageUrl(280, 180, 'technics'),
    ];
});
