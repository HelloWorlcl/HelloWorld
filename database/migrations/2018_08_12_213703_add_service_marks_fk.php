<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddServiceMarksFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_marks', function (Blueprint $table) {
            $table->foreign('service_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
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
        Schema::table('service_marks', function (Blueprint $table) {
            $table->dropForeign(['service_id']);
            $table->dropForeign(['mark_id']);
        });
    }
}
