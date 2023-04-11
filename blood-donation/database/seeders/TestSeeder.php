<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DonationType;
use App\Models\Test;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Donation type 1 - Blood Donation
        $donationType1 = DonationType::where('type', 'Whole Blood')->first();

        $tests1 = [
            [
                'test_name' => 'Hemoglobin Test',
                'criteria' => 'A blood test to check the level of hemoglobin in the blood. A level of 12.5g/dL or higher is required for males, and 12.0g/dL or higher for females.',
                'result_type' => 'number',

            ],
            [
                'test_name' => 'Infectious Disease Test - HIV',
                'criteria' => 'A blood test to check for the presence of HIV antibodies in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',

            ],
            [
                'test_name' => 'Infectious Disease Test - Hepatitis B',
                'criteria' => 'A blood test to check for the presence of hepatitis B surface antigen (HBsAg) in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',

            ],
            [
                'test_name' => 'Infectious Disease Test - Hepatitis C',
                'criteria' => 'A blood test to check for the presence of hepatitis C antibodies in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',

            ],
            [
                'test_name' => 'Infectious Disease Test - Malaria',
                'criteria' => 'A blood test to check for the presence of malaria parasites in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',

            ],
            [
                'test_name' => 'Iron Test',
                'criteria' => 'A blood test to check the level of iron in the blood. A level of 13.5 to 17.5 grams per deciliter (g/dL) for males, and 12.0 to 15.5 g/dL for females is considered normal.',
                'result_type' => 'number',

            ],
            [
                'test_name' => 'Platelet Count Test',
                'criteria' => 'A blood test to measure the number of platelets in the blood. The normal range is 150,000 to 450,000 per microliter (mcL) of blood.',
                'result_type' => 'number',

            ],
        ];

        foreach ($tests1 as $test) {
            $newTest = new Test;
            $newTest->test_name = $test['test_name'];
            $newTest->criteria = $test['criteria'];
            $newTest->donation_type_id = $donationType1->id;
            $newTest->result_type = $test['result_type'];
            $newTest->save();
        }
        // Donation type 2 - Double Red Cells
        $donationType2 = DonationType::where('type', 'Double Red Cells')->first();

        $tests2 = [
            [
                'test_name' => 'Hemoglobin Test',
                'criteria' => 'A blood test to check the level of hemoglobin in the blood. A level of 13.0g/dL or higher is required for males, and 12.5g/dL or higher for females.',
                'result_type' => 'number',

            ],
            [
                'test_name' => 'Infectious Disease Test - HIV',
                'criteria' => 'A blood test to check for the presence of HIV antibodies in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',

            ],
            [
                'test_name' => 'Infectious Disease Test - Hepatitis B',
                'criteria' => 'A blood test to check for the presence of hepatitis B surface antigen (HBsAg) in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',

            ],
            [
                'test_name' => 'Infectious Disease Test - Hepatitis C',
                'criteria' => 'A blood test to check for the presence of hepatitis C antibodies in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',

            ],
            [
                'test_name' => 'Infectious Disease Test - Malaria',
                'criteria' => 'A blood test to check for the presence of malaria parasites in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',

            ],
            [
                'test_name' => 'Iron Test',
                'criteria' => 'A blood test to check the level of iron in the blood. A level of 13.5 to 17.5 grams per deciliter (g/dL) for males, and 12.0 to 15.5 g/dL for females is considered normal.',
                'result_type' => 'number',

            ],
            [
                'test_name' => 'Red Blood Cell Count Test',
                'criteria' => 'A blood test to measure the number of red blood cells in the blood. The normal range is 4.5 to 5.5 million cells per microliter (mcL) of blood for males, and 4.0 to 5.0 million cells/mcL for females.',
                'result_type' => 'number',

            ],
        ];

        foreach ($tests2 as $test) {
            $newTest = new Test;
            $newTest->test_name = $test['test_name'];
            $newTest->criteria = $test['criteria'];
            $newTest->donation_type_id = $donationType2->id;
            $newTest->result_type = $test['result_type'];
            $newTest->save();
        }
        // Donation type 3 - Platelets
        $donationType3 = DonationType::where('type', 'Platelets')->first();

        $tests3 = [
            [
                'test_name' => 'Hemoglobin Test',
                'criteria' => 'A blood test to check the level of hemoglobin in the blood. A level of 13.0g/dL or higher is required for males and females.',
                'result_type' => 'number',
            ],
            [
                'test_name' => 'Infectious Disease Test - HIV',
                'criteria' => 'A blood test to check for the presence of HIV antibodies in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',
            ],
            [
                'test_name' => 'Infectious Disease Test - Hepatitis B',
                'criteria' => 'A blood test to check for the presence of hepatitis B surface antigen (HBsAg) in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',
            ],
            [
                'test_name' => 'Infectious Disease Test - Hepatitis C',
                'criteria' => 'A blood test to check for the presence of hepatitis C antibodies in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',
            ],
            [
                'test_name' => 'Infectious Disease Test - Syphilis',
                'criteria' => 'A blood test to check for the presence of syphilis antibodies in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',
            ]
        ];
        //foreach method
        foreach ($tests3 as $test) {
            $newTest = new Test;
            $newTest->test_name = $test['test_name'];
            $newTest->criteria = $test['criteria'];
            $newTest->donation_type_id = $donationType3->id;
            $newTest->result_type = $test['result_type'];
            $newTest->save();
        }
        $donationType4 = DonationType::where('type', 'Plasma')->first();

        $tests4 = [
            [
                'test_name' => 'Hemoglobin Test',
                'criteria' => 'A blood test to check the level of hemoglobin in the blood. A level of 12.5g/dL or higher is required for males, and 12.0g/dL or higher for females.',
                'result_type' => 'number',

            ],
            [
                'test_name' => 'Infectious Disease Test - HIV',
                'criteria' => 'A blood test to check for the presence of HIV antibodies in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',

            ],
            [
                'test_name' => 'Infectious Disease Test - Hepatitis B',
                'criteria' => 'A blood test to check for the presence of hepatitis B surface antigen (HBsAg) in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',

            ],
            [
                'test_name' => 'Infectious Disease Test - Hepatitis C',
                'criteria' => 'A blood test to check for the presence of hepatitis C antibodies in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',

            ],
            [
                'test_name' => 'Infectious Disease Test - Malaria',
                'criteria' => 'A blood test to check for the presence of malaria parasites in the blood. A negative result is required for donation.',
                'result_type' => 'boolean',

            ],
            [
                'test_name' => 'Antibody Test',
                'criteria' => 'A blood test to determine the presence of certain antibodies in the plasma. A positive result for certain antibodies may disqualify a donor from donating plasma.',
                'result_type' => 'boolean',

            ],
            [
                'test_name' => 'Plasma Protein Test',
                'criteria' => 'A blood test to measure the amount of protein in the plasma. A minimum protein level of 6.0 g/dL is required for donation.',
                'result_type' => 'number',

            ],
        ];

        foreach ($tests4 as $test) {
            $newTest = new Test;
            $newTest->test_name = $test['test_name'];
            $newTest->criteria = $test['criteria'];
            $newTest->donation_type_id = $donationType4->id;
            $newTest->result_type = $test['result_type'];
            $newTest->save();
        }
    }
}