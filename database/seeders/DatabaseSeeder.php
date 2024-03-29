<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UtypeSeeder::class,
            UserSeeder::class,
            ActiviteSeeder::class,
            ActualiteSeeder::class,
            ForfaitSeeder::class,
            ReservationSeeder::class,
            ThematiqueSeeder::class
        ]);
    }
}
