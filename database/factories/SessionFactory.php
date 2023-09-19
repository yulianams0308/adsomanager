<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Session>
 */
class SessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'observacion' => $this->faker->sentence,
            'fecha_inicio' => $this->faker->date(),
            'fecha_fin' => $this->faker->date(),
            'ficha_id' => \App\Models\Datasheet::factory(), // Utiliza el factory de Datasheet
            'ambiente_id' => \App\Models\Room::factory(), // Utiliza el factory de Room
        ];
    }
}
