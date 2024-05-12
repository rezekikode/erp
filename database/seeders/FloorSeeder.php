<?php

namespace Database\Seeders;

use App\Models\Floor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FloorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $floors = [
            [
                'floor_name' => 'Ground Floor',
                'building_id' => 1
            ],
            [
                'floor_name' => '1st Floor',
                'building_id' => 1
            ],
            [
                'floor_name' => '2nd Floor',
                'building_id' => 1
            ],
            [
                'floor_name' => '3rd Floor',
                'building_id' => 1
            ],
            [
                'floor_name' => '4th Floor',
                'building_id' => 1
            ],
            [
                'floor_name' => '5th Floor',
                'building_id' => 1
            ],
            [
                'floor_name' => '6th Floor',
                'building_id' => 1
            ],
            [
                'floor_name' => '7th Floor',
                'building_id' => 1
            ],
            [
                'floor_name' => '8th Floor',
                'building_id' => 1
            ],
            [
                'floor_name' => '9th Floor',
                'building_id' => 1
            ],
        ];

        foreach ($floors as $floor) {
            Floor::create($floor);
        }
    }
}
