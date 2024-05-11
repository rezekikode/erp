<?php

namespace Database\Seeders;

use App\Models\RefEmployeeType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefEmployeeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employeeTypes = [
            'Full Time',
            'Part Time',
            'Contract',
            'Intern',
        ];

        foreach ($employeeTypes as $employeeType) {
            $refEmployeeType = new RefEmployeeType();
            $refEmployeeType->type_name = $employeeType;
            $refEmployeeType->save();
        }
    }
}
