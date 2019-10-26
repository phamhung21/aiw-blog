<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\NewsTag;
use Faker\Generator as Faker;

$factory->define(NewsTag::class, function (Faker $faker) {
    return [
        'news_id'=>$faker->numberBetween($min = 1, $max = 10) ,
        'tags_id'=>$faker->numberBetween($min = 1, $max = 10) ,
    ];
});
