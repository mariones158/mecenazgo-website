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
        'title'=> $faker->text(15),
        'description'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'amount'=>$faker->numberBetween(1,10),
        'image' => $faker->imageUrl(640,480),
        'colour' => $faker->colorName,
        'description_detail' => $faker->paragraph,
        'description_general' => $faker->text(200),
        'description_title' => $faker->sentence(4),

    ];
});
