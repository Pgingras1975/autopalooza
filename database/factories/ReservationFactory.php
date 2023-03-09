<?php

namespace Database\Factories;

use App\Models\Forfait;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use PhpParser\Node\Stmt\For_;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_arrivee' => Carbon::now(),
            'date_depart' => Carbon::now(),
            'qty' => rand(1,4),
            'user_id'=> User::inRandomOrder()->first()->id,
            'forfait_id' => Forfait::inRandomOrder()->first()->id,
        ];
    }
}
