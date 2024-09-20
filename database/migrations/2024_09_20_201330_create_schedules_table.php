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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id('ScheduleID');
            $table->foreignId('RouteID')->constrained('routes')->onDelete('cascade'); // Assuming you have a routes table
            $table->foreignId('BusID')->constrained('buses')->onDelete('cascade');
            $table->foreignId('DriverID')->constrained('drivers')->onDelete('cascade');
            $table->timestamp('StartTime');
            $table->timestamp('EndTime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
