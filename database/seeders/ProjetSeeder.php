<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dd(fake()->date());

         \App\Models\Projet::factory()->create([
            'nom' => 'Test User',
            'description' => 'test@example.com',
            'date_debut' => fake()->date(),
            'date_fin' => fake()->date(),
         ]);
    }
}
