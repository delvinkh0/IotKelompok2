<?php

namespace Database\Seeders;

use App\Models\Reading;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $startDate = Carbon::now()->subYear();

        // Define the UV index pattern: 5 → 1 → 10
        $uvIndexPattern = array_merge(
            range(5, 1, -1), // Down from 5 to 1
            range(2, 10)     // Up from 2 to 10
        );

        $sensorReadingMap = [
            0 => 0,
            1 => 50,
            2 => 227,
            3 => 318,
            4 => 408,
            5 => 503,
            6 => 606,
            7 => 696,
            8 => 795,
            9 => 881,
            10 => 976,
            11 => 1079,
        ];

        $uvIndexPatternCount = count($uvIndexPattern);

        // Create readings with timestamps incremented by 15 minutes
        for ($i = 0; $i < 100; $i++) {
            // Determine the UV index based on the pattern
            $patternIndex = $i % $uvIndexPatternCount; // Cycle through the pattern
            $uvIndex = $uvIndexPattern[$patternIndex];
            $sensorReading = $sensorReadingMap[$uvIndex] + fake()->numberBetween(-20, 20); // Add minor noise

            Reading::create([
                'sensor_reading' => round(max(0, $sensorReading)), // Ensure non-negative sensor_reading
                'sensor_voltage' => fake()->randomFloat(2, 2.5, 3.5),
                'temperature' => fake()->randomFloat(1, 20, 40),
                'pressure' => fake()->randomFloat(2, 900, 1100),
                'humidity' => fake()->numberBetween(30, 100),
                'gas' => fake()->numberBetween(100, 500),
                'altitude' => fake()->numberBetween(0, 500),
                'created_at' => $startDate,
                'updated_at' => $startDate,
            ]);

            // Increment the timestamp by 15 minutes
            $startDate->addMinutes(15);
        }
    }
}
