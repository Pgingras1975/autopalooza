<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ThematiqueFactory extends Factory
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
            "image" => "https://i.pravatar.cc/100?img=" . rand(1, 50)
        ];
    }
}
