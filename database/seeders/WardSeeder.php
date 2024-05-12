<?php

namespace Database\Seeders;

use App\Models\Ward;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wards = [
            [
                'ward_name' => 'Ward A',
                'building_id' => 1,
            ],
            [
                'ward_name' => 'Ward B',
                'building_id' => 1,
            ],
            [
                'ward_name' => 'Ward C',
                'building_id' => 1,
            ],
            [
                'ward_name' => 'Ward D',
                'building_id' => 1,
            ],
            [
                'ward_name' => 'Ward E',
                'building_id' => 1,
            ],
            [
                'ward_name' => 'Ward F',
                'building_id' => 1,
            ],
            [
                'ward_name' => 'Ward G',
                'building_id' => 1,
            ],
            [
                'ward_name' => 'Ward H',
                'building_id' => 1,
            ],
            [
                'ward_name' => 'Ward I',
                'building_id' => 1,
            ],
            [
                'ward_name' => 'Ward J',
                'building_id' => 1,
            ],
        ];

        foreach ($wards as $ward) {
            Ward::create($ward);
        }
    }
}
