<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActualiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "titre" => $this->faker->text(15),
            "description" => $this->faker->paragraphs(3, true),
            "image" => "https://i.pravatar.cc/100?img=" . rand(1, 50),
        ];
    }
}
