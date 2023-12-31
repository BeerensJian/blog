<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // I dont define a post_id here because the PostFactory class creates comments and attaches it to the post created.
        // if i did it would cause an infinite loop
        return [
            'body' => fake()->text,
            'user_id' => User::factory()
        ];
    }
}
