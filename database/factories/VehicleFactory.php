<?php

use Faker\Generator as Faker;

$factory->define(App\Vehicle::class, function (Faker $faker) {
    return [
            'image' => $faker->imageUrl(),
            'user_id' => $faker->numberBetween(1,10),
            'type' => $faker->randomElement(array('SUV','Saloon','Hatchback')),
            'brand' => $faker->randomElement(array('Toyota','Mercedes','Honda','Nissan')),
            'model' => $faker->city,
            'document' => $faker->imageUrl(),
            'verified' => $faker->boolean,
            'status' => $faker->boolean,
    ];
});
