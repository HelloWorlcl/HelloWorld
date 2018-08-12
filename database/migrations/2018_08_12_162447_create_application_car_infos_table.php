<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationCarInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_car_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mark');
            $table->string('model');
            $table->year('release_year')->nullable();
            $table->float('mileage')->nullable();
            $table->float('engine_capacity')->nullable();
            $table->enum('fuel', ['petrol', 'diesel', 'gas', 'electric', 'hybrid', 'other'])->nullable();
            $table->enum('transmission', [
                'manual', 'automatic', 'automated_manual', 'continuously_variable', 'other'
            ])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_car_infos');
    }
}
