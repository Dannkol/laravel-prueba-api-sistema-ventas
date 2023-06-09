<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "cliente_id" => $this->faker->numberBetween(1,10),
            "fecha" => $this->faker->date
        ];
    }
}
