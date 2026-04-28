<?php

namespace Database\Factories;

use App\Models\Proizvod;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Proizvod>
 */
class ProizvodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naziv' => $this->faker->words(3, true),
            'opis' => $this->faker->sentence(),
            'cijena' => $this->faker->randomFloat(2, 10, 500),
            'kategorija' => $this->faker->randomElement(['Elektronika', 'Odjeća', 'Dom', 'Sport']),
            'aktivan' => $this->faker->boolean(80), // 80% šanse da bude true
        ];
    }
}
