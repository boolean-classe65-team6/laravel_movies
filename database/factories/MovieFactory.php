<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
            'title' => $faker->name,
            'overview' => $faker->paragraph,
            'release_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'poster_img' => $faker->imageUrl('900', '300'),
            'running_time' => $faker->numberBetween($min = 5, $max = 120),
            'parental_rating' => $faker->randomElement($array = array('G', 'PG', 'PG-13', 'R', 'NC-17')),
            'original_language' => $faker->languageCode
    ];
});
