<?php

namespace Database\Seeders;

use App\Models\Activite;
use Illuminate\Database\Seeder;

class ActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activite::factory(5)->create();
    }
}
