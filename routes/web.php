<?php

use App\Models\TimePunch;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $punches = TimePunch::select('id', 'clock_in', 'clock_out', 'employee_id') // Include 'employee_id' here
        ->with([
            'employee:id,first_name,last_name', // Ensure 'id' is included for proper relationship mapping
            'breaks:id,time_punch_id,break_start,break_end' // Ensure 'id' and 'time_punch_id' are included
        ])
        ->get();

    return view('dashboard', compact('punches'));
});
