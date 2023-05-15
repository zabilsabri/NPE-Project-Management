<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
            'klien' => fake()->company(),
            'tipe' => 'web',
            'pm_id' => rand(1, 20),
            'deadline' => fake()->dateTimeBetween('now', '+5 months', null),
            'status' => fake()->numberBetween(0, 1),
            'detail' => fake()->text(40),
        ];
    }
}
