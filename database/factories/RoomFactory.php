<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'num_salon' => $this->faker->randomNumber(100,200),
            'sede' => $this->faker->word,
            'capacidad' => $this->faker->numberBetween(10, 100), // Cambia esto con el rango deseado
            'observacion' => $this->faker->sentence,
        ];
    }
}
