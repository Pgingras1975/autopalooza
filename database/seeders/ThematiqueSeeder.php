<?php

namespace Database\Seeders;

use App\Models\Thematique;
use Illuminate\Database\Seeder;

class ThematiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thematique::factory(3)->create();
    }
}
