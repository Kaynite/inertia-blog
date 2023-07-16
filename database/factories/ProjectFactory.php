<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(3),
            'brief' => fake()->sentence(),
            'body' => fake()->paragraphs(15, true),
            'is_published' => fake()->boolean(),
        ];
    }
}
