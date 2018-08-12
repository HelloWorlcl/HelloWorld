<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mark_id');
            $table->string('model');
            $table->year('release_year');
            $table->float('mileage')->nullable();
            $table->float('engine_capacity')->nullable();
            $table->enum('fuel', ['petrol', 'diesel', 'gas', 'electric', 'hybrid', 'other'])->nullable();
            $table->enum('transmission', [
                'manual', 'automatic', 'automated_manual', 'continuously_variable', 'other'
            ])->nullable();
            $table->enum('drive_unit', ['front-wheel', 'rear', 'four-wheel', 'other'])->nullable();
            $table->enum('body_type', [
                'sedan', 'wagon', 'SUV/crossover', 'minivan', 'hatchback', 'coupe', 'pickup', 'other'
            ])->nullable();
            $table->unsignedInteger('owner_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
