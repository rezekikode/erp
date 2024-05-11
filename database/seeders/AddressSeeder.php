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
        $address = new Address();
        $address->street = '123 Main St';       
        $address->country = 'USA';
        $address->city = 'Springfield';
        $address->state = 'IL';
        $address->zip = '62701';
        $address->save();
    }
}
