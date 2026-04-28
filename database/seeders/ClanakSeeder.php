<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clanak;

class ClanakSeeder extends Seeder
{
    public function run(): void
    {
        Clanak::factory()->count(50)->create();
    
        Clanak::create([
            'naslov'     => 'Dobrodosli na nas blog!',
            'sadrzaj'    => 'Ovo je uvodni clanak...',
            'autor'      => 'Urednik',
            'kategorija' => 'opce',
            'objavljeno' => true,
        ]);
    }
}