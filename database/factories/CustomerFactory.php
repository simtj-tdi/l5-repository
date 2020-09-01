<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'document_type' => $faker->numberBetween(1,2),
        'document_number' => $faker->ean8
    ];
});
