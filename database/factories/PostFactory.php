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
            'user_id' => $this->faker->numberBetween(1, User::count()),
            'title' => $this->faker->words(3, true),
            'slug' => $this->faker->unique()->word(),
            'meta_description' => $this->faker->words(5, true),
            'content' => $this->faker->paragraph(),
            'is_featured' => $this->faker->boolean(),
            'is_published' => $this->faker->boolean(),
        ];
    }
}
