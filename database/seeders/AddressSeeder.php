<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $address = [
            [
                'street' => '456 Elm',
                'country' => 'USA',
                'city' => 'Springfield',
                'state' => 'IL',
                'zip' => '62702'
            ],
            [
                'street' => '789 Oak',
                'country' => 'USA',
                'city' => 'Springfield',
                'state' => 'IL',
                'zip' => '62703'
            ],  
            [
                'street' => '123 Maple',
                'country' => 'USA',
                'city' => 'Springfield',
                'state' => 'IL',
                'zip' => '62701'
            ],                                                          
        ];

        foreach ($address as $address) {
            Address::create($address);
        }
    }
}
