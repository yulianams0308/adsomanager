<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apprentice>
 */
class ApprenticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'etapa'=>$this->faker->sentence(),
            'estado'=>$this->faker->sentence(),
            'ficha_id' => \App\Models\Datasheet::factory(),
            'user_id' => \App\Models\User::factory(), // Utiliza el factory de Competence
        ];
    }
}
