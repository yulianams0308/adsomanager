<?php

namespace Database\Factories;

use Doctrine\Inflector\Rules\Word;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_resultado' => $this->faker->sentence(),
            'descripcion' => $this->faker->sentence(),
            'horas' => $this->faker->time,
            'fecha_inicio' => $this->faker->date,
            'fecha_fin' => $this->faker->date,
            'url_formato' => $this->faker->word,
            'instructor_id' => \App\Models\Instructor::factory(), // Utiliza el factory de Instr
            'competence_id' => \App\Models\Competence::factory(), // Utiliza el factory de Competence
        ];
    }
}
