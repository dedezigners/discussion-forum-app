<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {

    $name = $faker->sentence(2);

    return [
        'user_id' => function () {
            return User::all()->random();
        },
        'name' => $name,
        'slug' => Str::slug($name)
    ];
});
