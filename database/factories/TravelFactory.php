<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as faker;

class TravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user' => 1,
            'tanggal' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
            'lokasi' => $this->faker->randomElement(['Bandung', 'Jakarta', 'Surabaya', 'Semarang']),
            'suhu' => $this->faker->numberBetween(32, 38)
        ];
    }
}
