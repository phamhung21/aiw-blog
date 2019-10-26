<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comments;
use Faker\Generator as Faker;

$factory->define(Comments::class, function (Faker $faker) {
    return [
        'news_id'=>$faker->numberBetween($min = 1, $max = 10),
        'username'=>$faker->userName,
        // 'email'=>$faker->email,
        'content'=>$faker->text($maxNbChars = 200),
    ];
});
