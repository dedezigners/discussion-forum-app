<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Reply;
use App\Question;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return User::all()->random();
        },
        'question_id' => function () {
            return Question::all()->random();
        },
        'body' => $faker->text,

    ];
});
