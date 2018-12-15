<?php

use Faker\Generator as Faker;

$factory->define(App\Ride::class, function (Faker $faker) {
    return [

    'user_id' => $faker->numberBetween(1,10),
    'origin' => $faker->city,
    'destination' => $faker->city,
    'available_seats' => $faker->numberBetween(1,7),
    'unit_cost' => $faker->numberBetween(100,500),
    'departure' => $faker->dateTime,
    'status' => $faker->randomElement(array('departed','fullybooked','cancelled','available'))

    ];
});
