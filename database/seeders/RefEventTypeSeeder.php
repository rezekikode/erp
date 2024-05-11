<?php

namespace Database\Seeders;

use App\Models\RefEventType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefEventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eventTypes = [
            'Birthday',
            'Anniversary',
            'Wedding',
            'Graduation',
            'Retirement',
            'Promotion'
        ];

        foreach ($eventTypes as $eventType) {
            $refEventType = new RefEventType();
            $refEventType->type_name = $eventType;
            $refEventType->save();
        }
    }
}
