<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Articles;
use Faker\Generator as Faker;

$factory->define(Articles::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'content' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
