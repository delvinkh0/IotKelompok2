<?php

namespace Database\Factories;

use App\Models\Reading;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reading>
 */
class ReadingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Reading::class;

    public function definition(): array
    {
        return [
            'sensor_reading' => $this->faker->numberBetween(0, 1300),
            'sensor_voltage' => $this->faker->randomFloat(2, 2.5, 3.5),
            'temperature' => $this->faker->randomFloat(1, 20, 40),
            'pressure' => $this->faker->randomFloat(2, 900, 1100),
            'humidity' => $this->faker->numberBetween(30, 100),
            'gas' => $this->faker->numberBetween(100, 500),
            'altitude' => $this->faker->numberBetween(0, 500),
        ];
    }
}
