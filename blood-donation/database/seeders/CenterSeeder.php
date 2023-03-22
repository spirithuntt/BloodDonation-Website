<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //example of blood centers that we can add to cities with region, address, phone address	phone
        $centers = [
            ['name' => 'Croissant Rouge Derb Didi Moumen', 'city_id' => 1, 'region' => 'Casablanca, Settat', 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Derb Didi Moumen, Casablanca'],
            ['name' => 'Croissant Rouge Maarif', 'city_id' => 1, 'region' => 'Casablanca, Settat', 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Maarif, Casablanca'],
            ['name' => 'Croissant Rouge Sidi Maarouf', 'city_id' => 1, 'region' => 'Casablanca, Settat', 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Sidi Maarouf, Casablanca'],
            ['name' => 'Croissant Rouge Takaddoum', 'city_id' => 2, 'region' => 'Rabat', 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Takaddoum, Rabat'],
            ['name' => 'Croissant Rouge Agdal', 'city_id' => 2, 'region' => 'Rabat', 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Agdal, Rabat'],
            ['name' => 'Croissant Rouge Hay Riad', 'city_id' => 2, 'region' => 'Rabat', 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Hay Riad, Rabat'],
            ['name' => 'Croissant Rouge La Ville', 'city_id' => 3, 'region' => 'Kénitra', 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'La Ville, Kénitra'],
            ['name' => 'Croissant Rouge Mehdia', 'city_id' => 3, 'region' => 'Kénitra', 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Mehdia, Kénitra'],
            ['name' => 'Croissant Rouge Sakniya', 'city_id' => 3, 'region' => 'Kénitra', 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Sakniya, Kénitra'],
            ['name' => 'Croissant Rouge Fes Zouagha', 'city_id' => 4, 'region' => 'Fès', 'phone' => '+212 6'.mt_rand(10,99).mt_rand(10000000,99999999), 'address' => 'Zouagha, Fès'],
        ];
    }
}
