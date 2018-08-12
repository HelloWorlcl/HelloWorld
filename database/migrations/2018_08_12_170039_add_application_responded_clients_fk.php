<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApplicationRespondedClientsFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('application_responded_clients', function (Blueprint $table) {
            $table->foreign('application_id')
                ->references('id')->on('applications')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('client_id')
                ->references('id')->on('clients')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('application_responded_clients', function (Blueprint $table) {
            $table->dropForeign(['application_id']);
            $table->dropForeign(['client_id']);
        });
    }
}
