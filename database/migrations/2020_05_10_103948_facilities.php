<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Facilities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->bigIncrements('id_facilites');
            $table->integer('distance_sea');
            $table->integer('places');
            $table->integer('area_sq');
            $table->char('room', 1);
            $table->char('restaurant', 1);
            $table->char('market', 1);
            $table->char('bar', 1);
            $table->char('cooking_facil', 1);
            $table->char('ironic_facil', 1);
            $table->char('hanticapped_people', 1);
            $table->char('mobil_home', 1);
            $table->char('wifi', 1);
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
        Schema::dropIfExists('facilities');
    }
}
