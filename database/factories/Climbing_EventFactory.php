<?php

namespace Database\Factories;

use App\Models\Climbing_Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Climbing_Event>
 */
class Climbing_EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Climb: ' . fake()->city(),
            'location' => fake()->address(),
            'date' => fake()->dateTimeBetween('now', '+3 months'),
            'description' => fake()->paragraph(),
        ];
    }
}
