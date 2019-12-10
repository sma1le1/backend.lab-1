<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comments;
use Faker\Generator as Faker;

$factory->define(Comments::class, function (Faker $faker) {

    return [
        'textarea' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
