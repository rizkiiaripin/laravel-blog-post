<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->slug(mt_rand(2,3)),
            'category_id' => mt_rand(1,3),
            'author_id' => User::factory(),
            'slug' => fake()->slug(mt_rand(3,4)),
            'body' => fake()->paragraph(mt_rand(8,9)),
            
        ];
    }
}
