<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CampingsGr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campings_gr', function (Blueprint $table) {
            $table->bigIncrements('id_camping_gr');
            $table->string('name_gr', 200);
            $table->string('address_gr', 200);
            $table->string('city_gr', 200);
            $table->string('area_gr', 200);
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
        Schema::dropIfExists('campings_gr');
    }
}
