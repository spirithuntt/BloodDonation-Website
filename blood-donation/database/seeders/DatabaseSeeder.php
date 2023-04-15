<?php

namespace Database\Seeders;

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

        //run city seeder and donation type seeder and blood type seeder center seeder
        $this->call([
            RoleSeeder::class,
            CitySeeder::class,
            CenterSeeder::class,
            DonationTypeSeeder::class,
            BloodTypeSeeder::class,
            BusinessHourSeeder::class,
            AppointmentSeeder::class,
            UserSeeder::class,
            TestSeeder::class,
            DonationSeeder::class,
        ]);
    }
}
