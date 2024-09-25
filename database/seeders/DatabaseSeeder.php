<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\TimePunch;
use App\Models\TimePunchBreak;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $johnDoe = Employee::factory()->create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'JohnDoe@example.com'
        ]);

        TimePunch::factory()->create([
            'employee_id' => $johnDoe->id,
            'clock_in' => now(),
            'clock_out' => now()->addHours(8),
        ]);

        $lateGate = Employee::factory()->create([
            'first_name' => 'Late',
            'last_name' => 'Gate',
            'email' => 'LateGate@example.com',
        ]);

        TimePunch::factory()->create([
            'employee_id' => $lateGate->id,
            'clock_in' => now()->subHours(1),
            'clock_out' => now()->addHours(7),
        ]);

        $breaksAlot = Employee::factory()->create([
            'first_name' => 'Breaks',
            'last_name' => 'Alot',
            'email' => 'BreaksAlot@example.com',
        ]);

        $tp1 = TimePunch::factory()->create([
            'employee_id' => $breaksAlot->id,
            'clock_in' => now()->subHours(1),
            'clock_out' => now()->addHours(7),
        ]);

        TimePunchBreak::factory()->create([
            'employee_id' => $breaksAlot->id,
            'time_punch_id' => $tp1->id,
            'break_start' => now()->addHours(1),
            'break_end' => now()->addHours(2),
        ]);

        TimePunchBreak::factory()->create([
            'employee_id' => $breaksAlot->id,
            'time_punch_id' => $tp1->id,
            'break_start' => now()->addHours(3),
            'break_end' => now()->addHours(4),
        ]);

        $stillWorking = Employee::factory()->create([
            'first_name' => 'Still',
            'last_name' => 'Working',
            'email' => 'StillWorking@example.com',
        ]);

        TimePunch::factory()->create([
            'employee_id' => $stillWorking->id,
            'clock_in' => now()->subHours(1),
            'clock_out' => null,
        ]);
    }
}
