<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Like::class, function (Faker $faker) {
    $userid = rand(1,11);

    $createdAt = $faker->dateTimeBetween('-1 months','-0 months');

    $data = [
        'user_id' => rand(1,40),
        'comment_id' => rand(1,40),
        'created_at' => $createdAt,
        'updated_at' => $createdAt,
    ];

    return $data;
});
