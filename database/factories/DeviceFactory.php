<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Device>
 */
class DeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $deviceName = [
            'Apple', 'Xiaomi', 'OPPO', 'Samsung', 'Vivo', 'OnePlus', 'Realme',
            'Huawei', 'Motorola', 'Asus', 'Nokia', 'Google', 'Lg', 'Honor',
            'HTC', 'Tecno', 'Infinix', 'Lenovo', 'Lava', 'SONY', 'BlackBerry',
            'itel Mobile',
        ];

        return [
            'brand_name' => fake()->unique()->randomElement($deviceName),
            'model_name' => fake()->word(),
            'imei' => fake()->imei()
        ];
    }
}
