<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $etudiants = [
            ['nom' => 'Doe', 'prenom' => 'John', 'date_naissance' => '1990-01-01', 'photo' => 'public/images/user-1.jpg', 'email' => 'johndoe@example.com', 'password' => bcrypt('password'), 'telephone' => '+1234567890', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Smith', 'prenom' => 'Jane', 'date_naissance' => '1985-02-15', 'photo' => 'public/images/user-2.jpg', 'email' => 'janesmith@example.com', 'password' => bcrypt('password'),'telephone' => '+1234567890', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Johnson', 'prenom' => 'Jill', 'date_naissance' => '1995-03-10',  'photo' => 'public/images/user-3.jpg', 'email' => 'jilljohnson@example.com', 'password' => bcrypt('password'),'telephone' => '+123456789', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Williams', 'prenom' => 'Jim', 'date_naissance' => '1980-04-05', 'photo' => 'public/images/user-4.jpg', 'email' => 'jimwilliams@example.com', 'password' => bcrypt('password'),'telephone' => '+1234567890', 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'Brown', 'prenom' => 'Tom', 'date_naissance' => '1992-05-15',  'photo' => 'public/images/user-5.jpg', 'email' => 'tombrown@example.com', 'password' => bcrypt('password'),'telephone' => '+1234567890','created_at' => now(), 'updated_at' => now()],
        ];

        $etudiant = $this->faker->randomElement($etudiants);

        return [
            'nom' => $etudiant['nom'],
            'prenom' => $etudiant['prenom'],
            'date_naissance' => $etudiant['date_naissance'],
            'photo' => $etudiant['photo'],
            'email' => $etudiant['email'],
            'password' => $etudiant['password'],
            'telephone' => $etudiant['telephone'],
            'matricule' => $this->faker->unique()->randomNumber(8),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
