<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Detalles_ventaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "venta_id" => $this->faker->numberBetween(1,10),
            "producto_id" => $this->faker->numberBetween(1,10),
            "cantidad" => $this->faker->numberBetween(1,10)
        ];
    }
}
