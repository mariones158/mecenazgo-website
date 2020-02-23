<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Donation;
use Faker\Generator as Faker;

$factory->define(App\Donation::class, function (Faker $faker) {
    return [
        //
        'project_id' => 1,
        'donation_id' => 3,
        'amount' => $faker->randomFloat(2,999,99999),


    ];
});
