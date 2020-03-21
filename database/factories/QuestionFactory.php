<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Question;
use App\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Question::class, function (Faker $faker) {
    
    $title = $faker->sentence(5);

    return [
        'user_id' => function () {
            return User::all()->random();
        },
        'category_id' => function () {
            return Category::all()->random();
        },
        'title' => $title,
        'slug' => Str::slug($title),
        'body' => $faker->sentence()
    ];
});
