<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExhibitorKeyword;

class ExhibitorKeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExhibitorKeyword::create([
            'exhibitor_id' => 1,
            'keyword_id' => 1,
        ]);

        ExhibitorKeyword::create([
            'exhibitor_id' => 1,
            'keyword_id' => 2,
        ]);

    }
}
