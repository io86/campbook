<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SportsFacilities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports_facilities', function (Blueprint $table) {
            $table->bigIncrements('id_sports_facilites');
            $table->integer('beach_volley');
            $table->integer('tennis');
            $table->integer('footbal_5x5');
            $table->char('ping_pong', 1);
            $table->char('basket', 1);
            $table->char('pool', 1);
            $table->unsignedBigInteger('id_contact_info_camping');
            $table->foreign('id_contact_info_camping')->references('id_contact_info_camping')->on('contact_info_campings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sports_facilities');
    }
}
