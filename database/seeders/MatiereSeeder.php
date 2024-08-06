<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UE;
use App\Models\Matiere;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assurez-vous que des instances UE existent
        UE::factory()->count(5)->create();

        // Créez des instances Matiere
        Matiere::factory()->count(5)->create(); // Modifié pour s'assurer que toutes les matières sont incluses
    }
}

