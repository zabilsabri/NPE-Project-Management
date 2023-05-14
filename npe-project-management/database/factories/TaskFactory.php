<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->word(),
            'assign_to_id' => fake()->numberBetween(1, 20),
            'deadline' => fake()->dateTimeBetween('now', '+3 months', null),
            'detail' => fake()->text(250),
            'status' => fake()->boolean(),
        ];
    }
}
