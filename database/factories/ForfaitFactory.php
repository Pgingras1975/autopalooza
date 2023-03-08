<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ForfaitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->sentence(),
            "description" => $this->faker->paragraphs(3, true),
            "prix" => "299.99$",
            "image" => "https://i.pravatar.cc/100?img=" . rand(1, 50),
        ];
    }
}
