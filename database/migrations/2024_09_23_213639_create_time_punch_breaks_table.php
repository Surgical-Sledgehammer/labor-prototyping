<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('time_punch_breaks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('time_punch_id');
            $table->unsignedBigInteger('employee_id');
            $table->timestamp('break_start')->nullable();
            $table->timestamp('break_end')->nullable();
            $table->foreign('time_punch_id')->references('id')->on('time_punches');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_punch_breaks');
    }
};
