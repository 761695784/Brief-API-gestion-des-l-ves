<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UE;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matiere>
 */
class MatiereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $matieres = [
            ['libelle' => 'Francais', 'date_debut' => '2024/10/20', 'date_fin' => '2024/11/20'],
            ['libelle' => 'Mathematique', 'date_debut' => '2024/10/20', 'date_fin' => '2024/11/21'],
            ['libelle' => 'Sciences Physique', 'date_debut' => '2024/10/20', 'date_fin' => '2024/11/22'],
            ['libelle' => 'SVT', 'date_debut' => '2024/10/20', 'date_fin' => '2024/11/23'],
            ['libelle' => 'Anglais', 'date_debut' => '2024/10/20', 'date_fin' => '2024/11/24'], // Ajout de l'anglais
        ];

        $matiere = $this->faker->unique()->randomElement($matieres);
        return [
            "libelle" => $matiere["libelle"],
            "date_debut" => $matiere["date_debut"],
            "date_fin" => $matiere["date_fin"],
            "u_e_id" => UE::factory(), // Génère un u_e_id valide
            "created_at" => now(),
            "updated_at" => now(),
        ];
    }
}
