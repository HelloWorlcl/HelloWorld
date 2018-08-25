<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeApplicationCustomCarInfoColumnName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropForeign(['custom_car_info']);
            $table->renameColumn('custom_car_info', 'custom_car_info_id');
            $table->foreign('custom_car_info_id')
                ->references('id')->on('application_car_infos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropForeign(['custom_car_info_id']);
            $table->renameColumn('custom_car_info_id', 'custom_car_info');
            $table->foreign('custom_car_info')
                ->references('id')->on('application_car_infos');
        });
    }
}
