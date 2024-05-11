<?php

namespace Database\Seeders;

use App\Models\Organisation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organisation = new Organisation();
        $organisation->ref_organisation_type_id = 1;
        $organisation->organisation_name = 'Acme Corporation';
        $organisation->email = '';
        $organisation->phone = '';
        $organisation->save();
    }
}
