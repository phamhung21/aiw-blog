<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
        'cate_id'=>$faker->numberBetween($min = 1, $max = 10) ,
        'short_intro'=>$faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'file_name'=>$faker->imageUrl($width = 640, $height = 480),
        'content'=>$faker->paragraph($nbSentences = 100, $variableNbSentences = true),
        'author'=>$faker->name,
        // 'related_articles'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
        'tag_id'=>$faker->numberBetween($min = 1, $max = 10) ,
        // 'comment'=>$faker->text,
        // 'related'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
