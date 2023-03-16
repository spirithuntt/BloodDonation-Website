<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //blood donation sick tests name and criteria(range)['','']
        $tests = [
            ['name' => 'Hepatitis B', 'criteria' =>'[ 0 , 1]'],
            ['name' => 'Hepatitis C', 'criteria' =>'[ 0 , 1]'],
            ['name' => 'HIV', 'criteria' =>'[ 0 , 1]'],
            ['name' => 'Syphilis', 'criteria' =>'[ 0 , 1]'],
            ['name' => 'Malaria', 'criteria' =>'[ 0 , 1]'],
            ['name' => 'Hemoglobin', 'criteria' => '[12 , 17.5]'],
            ['name' => 'Blood Pressure', 'criteria' => '[120/8 , 40/90]'],
            ['name' => 'Blood Sugar', 'criteria' =>'[7 , 110]'],
            ['name' => 'Blood Volume', 'criteria' => '[5 , 600]'],
        ];
        foreach ($tests as $test) {
            $test = Test::create($test);
            $test->save();
        }

}
}
