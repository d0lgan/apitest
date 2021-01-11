<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Like::class, function (Faker $faker) {
    $userid = rand(1,11);
    $commentid = rand(1,40);

    $createdAt = $faker->dateTimeBetween('-1 months','-0 months');

    $data = [
        'user_id' => $userid,
        'comment_id' => $commentid,
        'created_at' => $createdAt,
        'updated_at' => $createdAt,
    ];

    return $data;
});
