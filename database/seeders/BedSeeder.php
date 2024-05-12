<?php

namespace Database\Seeders;

use App\Models\Bed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beds = [
            [
                'bed_name' => 'Bed A',
                'room_id' => 1,
            ],
            [
                'bed_name' => 'Bed B',
                'room_id' => 1,
            ],
            [
                'bed_name' => 'Bed C',
                'room_id' => 1,
            ],
            [
                'bed_name' => 'Bed D',
                'room_id' => 1,
            ],
            [
                'bed_name' => 'Bed E',
                'room_id' => 1,
            ],
            [
                'bed_name' => 'Bed F',
                'room_id' => 1,
            ],
            [
                'bed_name' => 'Bed G',
                'room_id' => 1,
            ],
            [
                'bed_name' => 'Bed H',
                'room_id' => 1,
            ],
            [
                'bed_name' => 'Bed I',
                'room_id' => 1,
            ],
        ];

        foreach ($beds as $bed) {
            Bed::create($bed);
        }
    }
}
