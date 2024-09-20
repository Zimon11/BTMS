<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id('RouteID'); // Primary Key
            $table->string('RouteName');
            $table->string('StartLocation');
            $table->string('EndLocation');
            $table->decimal('Distance', 8, 2); // Adjust precision and scale as needed
            $table->boolean('AI_OptimizedRoute')->default(false); // boolean with default value
            $table->timestamps(); // Created_at and Updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
