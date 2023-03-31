<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blood_types')->insert([
            ['type' => 'A+'],
            ['type' => 'A-'],
            ['type' => 'B+'],
            ['type' => 'B-'],
            ['type' => 'AB+'],
            ['type' => 'AB-'],
            ['type' => 'O+'],
            ['type' => 'O-'],
        ]);
    }
}
