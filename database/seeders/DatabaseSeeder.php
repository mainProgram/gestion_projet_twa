<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Projet::factory()->create([
            'nom' => "Mise en place d'un système de prêt de vélos en libre-service",
            'description' => "Ce projet vise à mettre en place un système de prêt de vélos en libre-service dans une ville ou un quartier en installant des bornes de prêt de vélos et en proposant des abonnements pour accéder au service. Le projet inclut également la mise en place d'un système de maintenance et de réparation des vélos.",
            'date_debut' => '2022-03-15',
            'date_fin' => '2022-12-31',
        ],
    );
    }
}
