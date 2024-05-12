<?php

namespace Database\Seeders;

use App\Models\RefCustomerType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefCustomerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $refCustomerTypes = [
            [
                'type_name' => 'Walk-in',
            ],
            [
                'type_name' => 'Corporate',
            ],
            [
                'type_name' => 'Government',
            ],
            [
                'type_name' => 'Insurance',
            ],
            [
                'type_name' => 'HMO',
            ],
            [
                'type_name' => 'PhilHealth',
            ],
            [
                'type_name' => 'Senior Citizen',
            ],
            [
                'type_name' => 'PWD',
            ],
            [
                'type_name' => 'OFW',
            ],
            [
                'type_name' => 'Others',
            ],
        ];

        foreach ($refCustomerTypes as $refCustomerType) {
            RefCustomerType::create($refCustomerType);
        }
    }
}
