<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $services = ['Display Change', 'Battery Change', 'Camera Change', 'BackShell Change',
        'Speaker Change', 'Glass Change', 'Logic Board', 'Ribbon Change', 'Service', 'Body Change'];

        return [

            'name' => fake()->unique()->randomElement($services),
        ];
    }
}
