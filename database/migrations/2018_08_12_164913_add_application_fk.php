<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApplicationFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('user_car_id')
                ->references('id')->on('cars')
                ->onDelete('cascade');
            $table->foreign('custom_car_info')
                ->references('id')->on('application_car_infos');
            $table->foreign('popular_service_id')
                ->references('id')->on('popular_services');
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
            $table->dropForeign(['user_id']);
            $table->dropForeign(['user_car_id']);
            $table->dropForeign(['custom_car_info']);
            $table->dropForeign(['popular_service_id']);
        });
    }
}
