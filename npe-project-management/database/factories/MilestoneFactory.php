<?php

namespace Database\Factories;

use App\Models\Milestone;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Milestone>
 */
class MilestoneFactory extends Factory
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
            'project_id' => rand(1, 4),
            'deadline' => fake()->dateTimeBetween('now', '+3 months', null),
            'detail' => fake()->text(250),
            'status' => fake()->boolean(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Milestone $milestone) {
            Task::factory()->count(10)->create([
                'milestone_id' => $milestone->id,
            ]);
        });
    }
}
