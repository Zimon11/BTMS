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

        Schema::create('routes', function (Blueprint $table) {
                    $table->id();
                    $table->string('route_name');
                    $table->string('start_point');
                    $table->string('end_point');
                    $table->json('stops')->nullable();  // Stores the stops as a JSON array
                    $table->time('departure_time');
                    $table->time('arrival_time');
                    $table->timestamps();
                });
            }
        };