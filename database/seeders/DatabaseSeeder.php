<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

            // Créer des rôles
            Role::create(['name' => 'admin', 'display_name' => 'Administrateur', 'description' => 'Rôle administrateur']);
            Role::create(['name' => 'medecin', 'display_name' => 'Médecin', 'description' => 'Rôle médecin']);
            Role::create(['name' => 'patient', 'display_name' => 'Patient', 'description' => 'Rôle patient']);

            // Ajouter d'autres rôles au besoin

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
