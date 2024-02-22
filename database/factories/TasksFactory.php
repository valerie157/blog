<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TasksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->text(5),
            'description'=>$this->faker->sentence(5),
            'completed'=>$this->faker->boolean,
        ];
    }
    public function run()
    {
        // Seed tasks table
        Task::factory()->count(10)->create();
    }
}
