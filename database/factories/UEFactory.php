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
        $UE = [
            ['date_debut' => '2024/09/01', 'date_fin' => '2024/09/30', 'coef' => 2, 'libelle' => 'Sciences'],
            ['date_debut' => '2024/09/01', 'date_fin' => '2024/09/30', 'coef' => 4, 'libelle' => 'Langues'],
        ];

        $UE = $this->faker->unique()->randomElement($UE);
        return [
            "libelle" => $UE["libelle"],
            "date_debut" => $UE["date_debut"],
            "date_fin" => $UE["date_fin"],
            "coef" => $UE["coef"],
            "created_at" => now(),
            "updated_at" => now(),
        ];
    }
}
