<?php

use App\User;
use App\Like;
use App\Reply;
use App\Question;
use App\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 10)->create();
        factory(Category::class, 15)->create();
        factory(Question::class, 30)->create();
        factory(Reply::class, 75)->create()->each(function ($reply) {
            return $reply->likes()->save(factory(Like::class)->make());
        });
    }
}
