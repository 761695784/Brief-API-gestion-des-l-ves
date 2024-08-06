<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UE>
 */
class UEFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_debut' => $this->faker->date(),
            'date_fin' => $this->faker->date(),
            'coef' => $this->faker->numberBetween(1, 5),
            'libelle' => $this->faker->word(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
