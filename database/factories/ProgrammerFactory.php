<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Programmer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Programmer>
 */
class ProgrammerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => intval("373" . rand(1, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9)),
            'first_name' => $this->faker->firstNameFemale(),
            'last_name' => $this->faker->lastName(),
            'department_id' => 1
        ];
    }
}
