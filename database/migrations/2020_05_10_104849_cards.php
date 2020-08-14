<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->bigIncrements('id_cards');
            $table->integer('visa');
            $table->integer('master');
            $table->integer('other_card');
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
        Schema::dropIfExists('cards');
    }
}
