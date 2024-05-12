<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'room_name' => 'Room A',
                'floor_id' => 1,
                'ward_id' => 1,
            ],
            [
                'room_name' => 'Room B',
                'floor_id' => 1,
                'ward_id' => 1,
            ],
            [
                'room_name' => 'Room C',
                'floor_id' => 1,
                'ward_id' => 1,
            ],
            [
                'room_name' => 'Room D',
                'floor_id' => 1,
                'ward_id' => 1,
            ],
            [
                'room_name' => 'Room E',
                'floor_id' => 1,
                'ward_id' => 1,
            ],
            [
                'room_name' => 'Room F',
                'floor_id' => 1,
                'ward_id' => 1,
            ],
            [
                'room_name' => 'Room G',
                'floor_id' => 1,
                'ward_id' => 1,
            ],
            [
                'room_name' => 'Room H',
                'floor_id' => 1,
                'ward_id' => 1,
            ],
            [
                'room_name' => 'Room I',
                'floor_id' => 1,
                'ward_id' => 1,
            ],
            [
                'room_name' => 'Room J',
                'floor_id' => 1,
                'ward_id' => 1,
            ],
        ];

        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}
