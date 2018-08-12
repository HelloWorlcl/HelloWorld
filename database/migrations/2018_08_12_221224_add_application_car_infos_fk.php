<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApplicationCarInfosFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('application_car_infos', function (Blueprint $table) {
            $table->foreign('mark_id')->references('id')->on('car_marks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('application_car_infos', function (Blueprint $table) {
            $table->dropForeign(['mark_id']);
        });
    }
}
