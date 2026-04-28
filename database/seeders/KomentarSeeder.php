<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clanak;
use App\Models\Komentar;

class KomentarSeeder extends Seeder
{
    public function run(): void
    {
        Clanak::all()->each(function ($clanak) {
            Komentar::factory()
                ->count(rand(3, 7))
                ->create(['clanak_id' => $clanak->id]);
        });
    }
}