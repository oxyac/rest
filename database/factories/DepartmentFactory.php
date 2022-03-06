<?php

namespace Database\Factories;

use App\Models\Lead;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'language' => $this->faker->languageCode(),
            'project_id' => Project::factory()->create()->id,
            'lead_id' => Lead::factory()->create()->id
        ];
    }
}
