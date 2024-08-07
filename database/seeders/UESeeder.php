<?php

namespace Database\Seeders;

use App\Models\UE;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UESeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       UE::factory()->count(2)->create();

    }
}
