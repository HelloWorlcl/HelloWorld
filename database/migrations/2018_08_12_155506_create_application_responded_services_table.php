<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationRespondedServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_responded_services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('application_id');
            $table->unsignedInteger('service_id');
            $table->date('start_time')->nullable();
            $table->integer('work_duration')->nullable();
            $table->float('bid')->nullable();
            $table->string('comment', 560)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_responded_services');
    }
}
