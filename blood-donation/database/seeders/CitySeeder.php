<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // morocco cities and their regions
        $cities = [
            ['city_name' => 'Casablanca', 'region' => 'Casablanca, Settat'],
            ['city_name' => 'Rabat', 'region' => 'Rabat, salé, kénitra'],
            ['city_name' => 'Kénitra', 'region' => 'Rabat, salé, kénitra'],
            ['city_name' => 'Fès', 'region' => 'Fès-Meknès'],
            ['city_name' => 'Marrakech', 'region' => 'Marrakech-Safi'],
            ['city_name' => 'Tanger', 'region' => 'Tanger'],
            ['city_name' => 'Oujda', 'region' => 'l\'Oriental'],
            ['city_name' => 'Agadir', 'region' => 'Souss-Massa'],
            ['city_name' => 'Meknès', 'region' => 'Fès-Meknès'],
            ['city_name' => 'Tétouan', 'region' => 'Tanger-Tétouan-Al Hoceima'],
            ['city_name' => 'Safi', 'region' => 'Marrakech-Safi'],
            ['city_name' => 'Khouribga', 'region' => 'Béni Mellal-Khénifra'],
            ['city_name' => 'Beni Mellal', 'region' => 'Béni Mellal-Khénifra'],
            ['city_name' => 'Témara', 'region' => 'Rabat-Salé-Kénitra'],
            ['city_name' => 'Khemisset', 'region' => 'Rabat-Salé-Kénitra'],
            ['city_name' => 'Mohammedia', 'region' => 'Casablanca, Settat'],
            ['city_name' => 'El Jadida', 'region' => 'Casablanca, Settat'],
            ['city_name' => 'Nador', 'region' => 'l\'Oriental'],
            ['city_name' => 'Ksar El Kebir', 'region' => 'Tanger-Tétouan-Al Hoceima'],
            ['city_name' => 'Settat', 'region' => 'Casablanca, Settat'],
            ['city_name' => 'Salé', 'region' => 'Rabat-Salé-Kénitra'],
            ['city_name' => 'Taza', 'region' => 'Fès-Meknès'],
            ['city_name' => 'Sidi Kacem', 'region' => 'Rabat-Salé-Kénitra'],
            ['city_name' => 'Fkih Ben Salah', 'region' => 'Béni Mellal-Khénifra'],
            ['city_name' => 'Tiznit', 'region' => 'Souss-Massa'],
            ['city_name' => 'Larache', 'region' => 'Tanger-Tétouan-Al Hoceima'],
            ['city_name' => 'Béni Mellal', 'region' => 'Béni Mellal-Khénifra'],
            ['city_name' => 'Guelmim', 'region' => 'Guelmim-Oued Noun'],
            ['city_name' => 'Ouarzazate', 'region' => 'Drâa-Tafilalet'],
            ['city_name' => 'Sidi Slimane', 'region' => 'Rabat-Salé-Kénitra'],
            ['city_name' => 'Khenifra', 'region' => 'Béni Mellal-Khénifra'],
            ['city_name' => 'El Kelâa des Sraghna', 'region' => 'Casablanca, Settat'],
            ['city_name' => 'Khouribga', 'region' => 'Béni Mellal-Khénifra'],
            ['city_name' => 'Témara', 'region' => 'Rabat-Salé-Kénitra'],
            ['city_name' => 'Khemisset', 'region' => 'Rabat-Salé-Kénitra'],
            ['city_name' => 'Mohammedia', 'region' => 'Casablanca, Settat'],
            ['city_name' => 'El Jadida', 'region' => 'Casablanca, Settat'],
            ['city_name' => 'Nador', 'region' => 'l\'Oriental'],
            ['city_name' => 'Ksar El Kebir', 'region' => 'Tanger-Tétouan-Al Hoceima'],
            ['city_name' => 'Settat', 'region' => 'Casablanca, Settat'],
            ['city_name' => 'Salé', 'region' => 'Rabat-Salé-Kénitra'],

        ];
        foreach ($cities as $city) {
            $city = City::create($city);
            $city->save();
        }
    }
}