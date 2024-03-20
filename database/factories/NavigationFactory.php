<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Navigation>
 */
class NavigationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bg_color' => $this->faker->hexColor(),
            'items' => $this->faker->randomElements(['fashion', 'travel', 'food', 'lifestyle', 'crafts'], 3, false),
            'items_sidebar' => $this->faker->randomElements(['1', '2', '3', '4', '5'], 2, false),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
