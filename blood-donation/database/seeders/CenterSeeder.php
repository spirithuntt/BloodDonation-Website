<?php

namespace Database\Seeders;

use App\Models\Center;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $centers = [
            ['center_name' => 'Croissant Rouge Derb Didi Moumen', 'city_id' => 1 , 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Derb Didi Moumen, Casablanca'],
            ['center_name' => 'Croissant Rouge Maarif', 'city_id' => 1 , 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Maarif, Casablanca'],
            ['center_name' => 'Croissant Rouge Sidi Maarouf', 'city_id' => 1 , 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Sidi Maarouf, Casablanca'],
            ['center_name' => 'Croissant Rouge Takaddoum', 'city_id' => 2, 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Takaddoum, Rabat'],
            ['center_name' => 'Croissant Rouge Agdal', 'city_id' => 2, 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Agdal, Rabat'],
            ['center_name' => 'Croissant Rouge Hay Riad', 'city_id' => 2, 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Hay Riad, Rabat'],
            ['center_name' => 'Croissant Rouge La Ville', 'city_id' => 3, 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'La Ville, Kénitra'],
            ['center_name' => 'Croissant Rouge Mehdia', 'city_id' => 3, 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Mehdia, Kénitra'],
            ['center_name' => 'Croissant Rouge Sakniya', 'city_id' => 3, 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Sakniya, Kénitra'],
            ['center_name' => 'Croissant Rouge Fes Zouagha', 'city_id' => 4, 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Zouagha, Fès'],
            ['center_name' => 'Croissant Rouge gueliz', 'city_id' => 4, 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'marrakech, safi'],
        ];
        //create and save
        foreach($centers as $center)
        {
            $center = Center::create($center);
            $center->save();
        }
    }
}
