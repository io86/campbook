<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CampingsEn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campings_en', function (Blueprint $table) {
            $table->bigIncrements('id_camping_en');
            $table->string('name_en', 200);
            $table->string('address_en', 200);
            $table->string('city_en', 200);
            $table->string('area_en', 200);
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
        Schema::dropIfExists('campings_en');
    }
}
