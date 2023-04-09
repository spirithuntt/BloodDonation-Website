<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //'Whole Blood', 'Platelets', 'Plasma', 'Double Red Cells'
        DB::table('donation_types')->insert([
            ['type' => 'Unknown'],
            ['type' => 'Whole Blood'],
            ['type' => 'Platelets'],
            ['type' => 'Plasma'],
            ['type' => 'Double Red Cells'],
        ]);
    }
}
