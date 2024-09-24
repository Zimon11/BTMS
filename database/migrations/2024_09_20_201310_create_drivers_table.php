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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id('DriverID');
            $table->string('FullName');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('LicenseNumber');
            $table->string('ContactInfo');
            $table->foreignId('AssignedBus')->nullable()->constrained('buses')->onDelete('set null');
            $table->decimal('PerformanceScore', 5, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
