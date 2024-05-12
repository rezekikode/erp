<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $people = [
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'gender' => 'Male',
                'date_of_birth' => '1980-01-01'
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'gender' => 'Female',
                'date_of_birth' => '1985-01-01'
            ],
            [
                'first_name' => 'Michael',
                'last_name' => 'Smith',
                'gender' => 'Male',
                'date_of_birth' => '1990-01-01'
            ],
            [
                'first_name' => 'Jennifer',
                'last_name' => 'Smith',
                'gender' => 'Female',
                'date_of_birth' => '1995-01-01'
            ],
        ];

        foreach ($people as $person) {
            People::create($person);
        }
    }
}
