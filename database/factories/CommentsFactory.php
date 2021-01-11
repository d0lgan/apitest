<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Comment::class, function (Faker $faker) {
    $text = $faker->realText(rand(10,100));
    $userid = rand(1,11);

    $createdAt = $faker->dateTimeBetween('-1 months','-0 months');

    $data = [
        'comment' => $text,
        'user_id' => $userid,
        'by_user_id' => $userid,
        'created_at' => $createdAt,
        'updated_at' => $createdAt,
    ];

    return $data;
});
