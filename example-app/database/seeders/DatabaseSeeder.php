<?php

namespace Database\Seeders;

use App\Models\{Category, Comment, User, Post};
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        Comment::truncate();
        Post::truncate();
        Category::truncate();

        User::factory(5)->create()->each(function ($user) {
            Category::factory(5)->create()->each(
                fn ($cat) => Post::factory(10)->create(['category_id' => $cat->id, 'user_id' => $user->id])
            );
        });
    }
}