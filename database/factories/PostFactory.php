<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
    	'title' => $faker->sentence(1),
    	'body' => $faker->paragraphs(3,true),
    	'user_id' => rand(0,50)
        //
    ];
});
