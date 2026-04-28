<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
 
    public function run(): void
{
    // Kreiraj 10 članaka koji su sigurno objavljeni
    \App\Models\Clanak::factory()
        ->count(10)
        ->objavljeno()
        ->create();

    // Kreiraj 5 članaka koji su sigurno neobjavljeni
    \App\Models\Clanak::factory()
        ->count(5)
        ->neobjavljeno()
        ->create();
}
}