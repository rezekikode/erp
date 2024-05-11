<?php

namespace Database\Seeders;

use App\Models\RefOrganisationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefOrganisationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organisationTypes = [
            'Government',
            'Non-Profit',
            'Private',
            'Public',
        ];

        foreach ($organisationTypes as $organisationType) {
            $refOrganisationType = new RefOrganisationType();
            $refOrganisationType->type_name = $organisationType;
            $refOrganisationType->save();
        }        
    }
}
