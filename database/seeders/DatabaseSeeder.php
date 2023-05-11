<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\UserLike;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(10)->create();
        \App\Models\Like::factory(10)->create();
    }
}
