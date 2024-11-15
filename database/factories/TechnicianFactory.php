<?php

namespace Database\Factories;

use App\Models\TechnicianRole;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Technician>
 */
class TechnicianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'phone' => fake()->phoneNumber(),
            'profile_pic' => fake()->imageUrl(),
            'role_id' => TechnicianRole::where('name', 'executive')->first()->id,
        ];
    }
}
