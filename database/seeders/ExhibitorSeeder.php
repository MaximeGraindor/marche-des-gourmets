<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Exhibitor;
use Illuminate\Database\Seeder;

class ExhibitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exhibitor::create([
            'firstname' => 'Maxime',
            'name' => 'Maxime',
            'company_name' => 'MaximeGraindor',
            'email' => 'maxime.graindor@hotmail.com',
            'telephone' => '0476285960',
            'country' => 'Belgique',
            'postal_code' => '4350',
            'location' => 'Remicourt',
            'website' => 'maximegraindor.be',
            'informations' => 'Hellow world! Ceci est un test :/',
            'agree' => 1,

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
