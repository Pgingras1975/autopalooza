<?php

namespace Database\Seeders;

use App\Models\Utype;
use Illuminate\Database\Seeder;

class UtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Utype::factory(2)->create();
    }
}
