<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ajouter les services

        Service::create(['nom' => 'cardiologie', 'description' => 'le service de cardio',]);
        Service::create(['nom' => 'pediatrie', 'description' => 'le service de pediatrie',]);
        Service::create(['nom' => 'chirurgie', 'description' => 'le service de chirurgie',]);
    }
}
