<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name'    => $faker->name,
        'email'   => $faker->unique()->email,
        'phone'   => $faker->phoneNumber,
        'website' => $faker->url,
    ];
});
