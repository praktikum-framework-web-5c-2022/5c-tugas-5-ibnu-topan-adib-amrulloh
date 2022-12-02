<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $jenis_kelamin = ['laki-laki', 'perempuan'];
        return [
            'nama' => fake()->firstName() . " ". fake()->lastName(),
            'nik' => fake()->numerify('################'),
            'jenis_kelamin' => fake()->randomElement($jenis_kelamin),
            'tempat_lahir' => fake()->sentence(),
            'tanggal_lahir' => fake()->dateTimeBetween('-30 years','-18 years'),
            'alamat' => fake()->paragraph(),
            'photo' => fake()->sentence()
        ];
    }
}
