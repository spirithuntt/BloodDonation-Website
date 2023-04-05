<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //reserve 10 appointments in different days
        $this->reserveAppointments(1);
    }

    private function reserveAppointments(int $count): void
    {
        $users = User::all();

        $users->each(function ($user) use ($count) {
            Appointment::factory()
                ->count($count)
                ->create([
                    'user_id' => 1,
                    'time' => '10:00:00',
                    'date' => now()->addDay()->format('Y-m-d'),
                ]);
        });
    }
}
