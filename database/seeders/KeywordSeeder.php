<?php

namespace Database\Seeders;

use App\Models\Keyword;
use Illuminate\Database\Seeder;

class KeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Keyword::create([
            'name' => 'Bio'
        ]);

        Keyword::create([
            'name' => 'épices'
        ]);

        Keyword::create([
            'name' => 'Alcool'
        ]);

        Keyword::create([
            'name' => 'Vin'
        ]);
    }
}
