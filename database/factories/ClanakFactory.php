<?php

namespace Database\Factories;

use App\Models\Clanak;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clanak>
 */
class ClanakFactory extends Factory
{
    public function definition(): array
    {
        return [
            'naslov' => $this->faker->sentence(),
            'sadrzaj' => $this->faker->paragraphs(3, true),
            'objavljeno' => $this->faker->boolean(), // Osnovna vrijednost
        ];
    }

    // Stanje za objavljene članke
    public function objavljeno(): static
    {
        return $this->state(fn (array $attributes) => [
            'objavljeno' => true,
        ]);
    }

    // Stanje za neobjavljene članke
    public function neobjavljeno(): static
    {
        return $this->state(fn (array $attributes) => [
            'objavljeno' => false,
        ]);
    }
}