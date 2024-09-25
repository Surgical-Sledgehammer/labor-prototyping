<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TimePunch>
 */
class TimePunchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => 1,
            'clock_in' => $this->faker->dateTimeThisMonth,
            'clock_out' => $this->faker->dateTimeThisMonth,
        ];
    }

    public function clockOutNull(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'clock_out' => null,
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
