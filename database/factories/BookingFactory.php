<?php

use Faker\Generator as Faker;

$factory->define(App\Booking::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,10),
        'ride_id' => $faker->numberBetween(1,20),
        'seats' => $faker->numberBetween(1,5),
        'payment_mode' => $faker->randomElement(array('cash','wallet')),
        'status' => $faker->randomElement(array('completed','cancelled','waiting')),
        'remark' => $faker->sentence,
    ];
});
