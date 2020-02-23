<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {


    $title = $faker->sentence(5);


    return [
        //'user'
        'user_id' => $faker->numberBetween(1,8),
        'name' => $faker->text(15),
        'indetification_number' =>$faker->numberBetween(0000,9999),
        'image' => $faker->imageUrl(640,480),
        'colour' => $faker->colorName,
        'status' => $faker->numberBetween(0,1),
        'description_detail' => $faker->paragraph,
        'description_general' => $faker->text(200),
        'description_title' => $faker->sentence(4),


    ];
});
