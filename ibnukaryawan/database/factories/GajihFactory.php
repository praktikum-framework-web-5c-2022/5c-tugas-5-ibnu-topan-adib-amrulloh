<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gajih>
 */
class GajihFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'karyawan_id' => fake()->unique()->randomDigit(),
            'gajih_pokok' => fake()->numberBetween(0,200000000),
            'gajih_lembur' => fake()->numberBetween(0,200000000),
            'tunjangan' => fake()->numberBetween(0,200000000),
            'potongan' => fake()->numberBetween(0,200000000),
            'total_gajih' => fake()->numberBetween(0,200000000)
        ];
    }
}
