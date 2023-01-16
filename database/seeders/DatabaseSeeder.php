<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AccessMenu;
use App\Models\Blog;
use App\Models\CommentBlog;
use App\Models\LikeBlog;
use App\Models\Menu;
use App\Models\User;
use App\Models\UserRole;
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
        User::factory()->create();
        Blog::factory()->create();
        AccessMenu::factory()->create();
        Menu::factory()->create();
        CommentBlog::factory()->create();
        LikeBlog::factory()->create();
        UserRole::factory()->create();
        // User::factory(10)
        //     ->has(Blog::factory()->count(3))
        //     ->create();
        // User::factory(10)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
