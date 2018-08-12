<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('user_car_id')->nullable();
            $table->unsignedInteger('custom_car_info')->nullable();
            $table->unsignedInteger('popular_service_id')->nullable();
            $table->string('other_service')->nullable();
            $table->string('comment', 510)->nullable();
            $table->date('convenient_start')->nullable();
            $table->date('convenient_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
