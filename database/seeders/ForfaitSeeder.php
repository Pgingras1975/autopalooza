<?php

namespace Database\Seeders;

use App\Models\Forfait;
use Illuminate\Database\Seeder;

class ForfaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Forfait::factory(4)->create();
    }
}
