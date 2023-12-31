<?php

namespace Database\Seeders;

use App\Models\Payment;
use Database\Seeders\RoleSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            TypeSeeder::class,
            BrandSeeder::class,
            VehicleSeeder::class,
            BookingSeeder::class,
            LocationSeeder::class,
            ThanaSeeder::class,
            // PaymentSeeder::class,
            ServiceSeeder::class,
            BserviceSeeder::class,
        ]);
    }
}
