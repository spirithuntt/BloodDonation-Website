<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        //mass insertion
        DB::table('donations')->insert([
            [
                'user_id' => 1,
                'center_id' => 1,
                'blood_type_id' => 2,
                'donation_type_id' => 3,
                'is_donated' => false,
                'date' => $now->format('Y-m-d'),
                'time' => $now->format('H:i:s'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 2,
                'center_id' => 2,
                'blood_type_id' => 2,
                'donation_type_id' => 2,
                'is_donated' => true,
                'date' => $now->subDays(7)->format('Y-m-d'),
                'time' => $now->subHours(2)->format('H:i:s'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'user_id' => 3,
                'center_id' => 3,
                'blood_type_id' => 3,
                'donation_type_id' => 3,
                'is_donated' => true,
                'date' => $now->subDays(14)->format('Y-m-d'),
                'time' => $now->subHours(4)->format('H:i:s'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            //user id but has an old donation before 3 months
            [
                'user_id' => 4,
                'center_id' => 4,
                'blood_type_id' => 1,
                'donation_type_id' => 2,
                'is_donated' => true,
                'date' => $now->subDays(90)->format('Y-m-d'),
                'time' => $now->subHours(14)->format('H:i:s'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
