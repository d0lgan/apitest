<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Comment::class, function (Faker $faker) {
    $text = $faker->realText(rand(10,100));

    $createdAt = $faker->dateTimeBetween('-1 months','-0 months');

    $data = [
        'comment' => $text,
        'user_id' => rand(1,11),
        'to_user_id' => rand(1,11),
        'created_at' => $createdAt,
        'updated_at' => $createdAt,
    ];

    return $data;
});
