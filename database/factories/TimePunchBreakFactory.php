<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TimePunchBreak>
 */
class TimePunchBreakFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'time_punch_id' => 1,
            'employee_id' => 1,
            'break_start' => $this->faker->dateTimeThisMonth,
            'break_end' => $this->faker->dateTimeThisMonth,
        ];
    }

    public function forTimePunch(int $timePunchId): Factory
    {
        return $this->state(function (array $attributes) use ($timePunchId) {
            return [
                'time_punch_id' => $timePunchId,
            ];
        });
    }

    public function forEmployee(int $employeeId): Factory
    {
        return $this->state(function (array $attributes) use ($employeeId) {
            return [
                'employee_id' => $employeeId,
            ];
        });
    }
}
