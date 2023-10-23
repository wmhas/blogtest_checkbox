<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'category' => $faker->text(20),
    ];

});

$factory->define(\App\Organization::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,

    ];

});


