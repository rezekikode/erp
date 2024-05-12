<?php

namespace Database\Seeders;

use App\Models\Building;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $building = [
            ['building_name' => 'Building A'],
            ['building_name' => 'Building B'],
            ['building_name' => 'Building C'],
            ['building_name' => 'Building D'],
            ['building_name' => 'Building E'],
            ['building_name' => 'Building F'],
            ['building_name' => 'Building G'],
            ['building_name' => 'Building H'],
            ['building_name' => 'Building I'],
            ['building_name' => 'Building J'],
        ];

        foreach ($building as $building) {
            Building::create($building);
        }
    }
}
