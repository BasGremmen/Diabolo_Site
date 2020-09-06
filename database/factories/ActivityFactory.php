<?php

use Faker\Generator as Faker;

$factory->define(App\Activity::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(1),
    	'body' => $faker->paragraphs(3,true),
    	'user_id' => rand(0,50),
    	'category_id' => rand(0,4),
    	'date' => date('Y-m-d',mt_rand(1111111,11111111))
        //
    ];
});
