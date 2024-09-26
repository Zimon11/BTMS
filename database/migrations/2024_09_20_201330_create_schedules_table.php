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
            $table->id('ScheduleID'); // Primary key for this table
        
            // Ensure these columns are of type unsignedBigInteger to match the referenced columns
            $table->unsignedBigInteger('RouteID');
            $table->unsignedBigInteger('BusID');
            $table->unsignedBigInteger('DriverID');
        
            // Define foreign key constraints
            $table->foreign('RouteID')->references('RouteID')->on('routes')->onDelete('cascade');
            $table->foreign('BusID')->references('BusID')->on('buses')->onDelete('cascade');
            $table->foreign('DriverID')->references('DriverID')->on('drivers')->onDelete('cascade');
        
            // Use dateTime for flexible datetime handling
            $table->dateTime('StartTime');
            $table->dateTime('EndTime');
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
