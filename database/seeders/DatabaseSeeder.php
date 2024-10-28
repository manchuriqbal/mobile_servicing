<?php

namespace Database\Seeders;

use App\Models\Billing;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Device;
use App\Models\Product;
use App\Models\Service;
use App\Models\Technician;
use App\Models\TechnicianRole;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        if (env('APP_ENV') == 'local') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');


            Device::truncate();
            Service::truncate();
            Category::truncate();
            TechnicianRole::truncate();
            Technician::truncate();
            Customer::truncate();
            Product::truncate();
            Billing::truncate();

            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            DB::table('technician_roles')->insert([
                ['name' => 'executive', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'manager', 'created_at' => now(), 'updated_at' => now()],
                // Add more roles as needed
            ]);

            Device::factory()->count(11)->create();
            Service::factory()->count(5)->create();
            Category::factory()->count(5)->create();
            TechnicianRole::factory()->count(2)->create();
            Technician::factory()->count(5)->create();
            Customer::factory()->count(15)->create();
            Product::factory()->count(25)->create();
            Billing::factory()->count(40)->create();

        }
        else {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }

    }
}
