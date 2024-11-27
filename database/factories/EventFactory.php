<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'max_value' => fake()->randomFloat(2),
            'drawn_date' => fake()->dateTimeBetween('now', '+1 month'),
        ];
    }
}
