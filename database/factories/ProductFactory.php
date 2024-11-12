<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Device;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::inRandomOrder()->first();
        $device = Device::inRandomOrder()->first();
        return [
            'name' => fake()->word(),
            'quantity' => fake()->numberBetween(1,100),
            'device_id' => $device->id,
            'category_id' => $category->id,
            'amount' => fake()->randomFloat(2, 1000, 20000),
            'purchase_price' => fake()->randomFloat(2, 200, 5000),
        ];
    }
}
