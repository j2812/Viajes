<?php

use Faker\Generator as Faker;

$factory->define(\App\Offer::class, function (Faker $faker) {
    return [
        'city' => $faker->city,
        'description' => $faker->text(150),
        'price' => $faker->randomNumber(3),
        'fromDay' => $faker->date('Y-m-d'),
        'toDay' => $faker->date('Y-m-d'),
        'hasDiscount' => rand(0, 1),
        'discountPercent' => rand(0, 10),
        'file' => 'http://placehold.it/400x250/000/fff',
    ];
});
