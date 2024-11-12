<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Device;
use App\Models\Service;
use App\Models\Technician;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Billing>
 */
class BillingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $customer = Customer::inRandomOrder()->first();
        $service = Service::inRandomOrder()->first();
        $technician = Technician::inRandomOrder()->first();
        $deviceName = [
            'Apple', 'Xiaomi', 'OPPO', 'Samsung', 'Vivo', 'OnePlus', 'Realme',
            'Huawei', 'Motorola', 'Asus', 'Nokia', 'Google', 'Lg', 'Honor',
            'HTC', 'Tecno', 'Infinix', 'Lenovo', 'Lava', 'SONY', 'BlackBerry',
            'itel Mobile',
        ];
        return [
            'customer_id' => $customer->id,
            'service_id' => $service->id,
            'technician_id' => $technician->id,
            'device_name' => fake()->randomElement($deviceName),
            'amount' => fake()->randomFloat(2, 1500, 5000),
            'purchase_price' => fake()->randomFloat(2, 20, 1400),
            'payment_method' => \App\Models\Billing::PAYMENT_CASH,
        ];
    }
}
