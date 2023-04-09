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
            ['city_name' => 'Rabat', 'region' => 'Rabat'],
            ['city_name' => 'Kénitra', 'region' => 'Kénitra'],
            ['city_name' => 'Fès', 'region' => 'Fès'],
            ['city_name' => 'Marrakech', 'region' => 'Marrakech'],
            ['city_name' => 'Tanger', 'region' => 'Tanger'],
            ['city_name' => 'Oujda', 'region' => 'Oujda'],
            ['city_name' => 'Agadir', 'region' => 'Agadir'],
            ['city_name' => 'Meknès', 'region' => 'Meknès'],
            ['city_name' => 'Tétouan', 'region' => 'Tétouan'],
            ['city_name' => 'Safi', 'region' => 'Safi'],
            ['city_name' => 'Khouribga', 'region' => 'Khouribga'],
            ['city_name' => 'Beni Mellal', 'region' => 'Beni Mellal'],
            ['city_name' => 'Témara', 'region' => 'Témara'],
            ['city_name' => 'Khemisset', 'region' => 'Khemisset'],
            ['city_name' => 'Mohammedia', 'region' => 'Mohammedia'],
            ['city_name' => 'El Jadida', 'region' => 'El Jadida'],
            ['city_name' => 'Nador', 'region' => 'Nador'],
            ['city_name' => 'Ksar El Kebir', 'region' => 'Ksar El Kebir'],
            ['city_name' => 'Settat', 'region' => 'Settat'],
            ['city_name' => 'Salé', 'region' => 'Salé'],
            ['city_name' => 'Taza', 'region' => 'Taza'],
            ['city_name' => 'Sidi Kacem', 'region' => 'Sidi Kacem'],
            ['city_name' => 'Fkih Ben Salah', 'region' => 'Fkih Ben Salah'],
            ['city_name' => 'Tiznit', 'region' => 'Tiznit'],
            ['city_name' => 'Larache', 'region' => 'Larache'],
            ['city_name' => 'Béni Mellal', 'region' => 'Béni Mellal'],
            ['city_name' => 'Guelmim', 'region' => 'Guelmim'],
            ['city_name' => 'Ouarzazate', 'region' => 'Ouarzazate'],
            ['city_name' => 'Sidi Slimane', 'region' => 'Sidi Slimane'],
            ['city_name' => 'Sefrou', 'region' => 'Sefrou'],
            ['city_name' => 'Khenifra', 'region' => 'Khenifra'],
            ['city_name' => 'Taourirt', 'region' => 'Taourirt'],
            ['city_name' => 'Tiznit', 'region' => 'Tiznit'],
            ['city_name' => 'Larache', 'region' => 'Larache'],
            ['city_name' => 'Béni Mellal', 'region' => 'Béni Mellal'],
            ['city_name' => 'Guelmim', 'region' => 'Guelmim'],
            ['city_name' => 'Ouarzazate', 'region' => 'Ouarzazate'],
            ['city_name' => 'Sidi Slimane', 'region' => 'Sidi Slimane'],
            ['city_name' => 'Sefrou', 'region' => 'Sefrou'],
            ['city_name' => 'Khenifra', 'region' => 'Khenifra'],
            ['city_name' => 'Taourirt', 'region' => 'Taourirt'],
            ['city_name' => 'Tiznit', 'region' => 'Tiznit'],
            ['city_name' => 'Larache', 'region' => 'Larache'],
            ['city_name' => 'Béni Mellal', 'region' => 'Béni Mellal'],
            ['city_name' => 'Guelmim', 'region' => 'Guelmim'],
            ['city_name' => 'Ouarzazate', 'region' => 'Ouarzazate'],
            ['city_name' => 'Sidi Slimane', 'region' => 'Sidi Slimane'],
        ];
        foreach($cities as $city)
        {
            $city = City::create($city);
            $city->save();
        }
    }
}
