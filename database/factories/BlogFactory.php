<?php

namespace Database\Factories;

use App\Models\CategoryBlog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(mt_rand(2, 4)),
            'categoryId' => CategoryBlog::factory(),
            'userId' => User::factory(),
            'slug' => fake()->slug(),
            'body' => fake()->paragraph(mt_rand(5, 10)),
        ];
    }
}
