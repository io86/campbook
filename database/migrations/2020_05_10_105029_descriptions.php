<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Descriptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descriptions', function (Blueprint $table) {
            $table->bigIncrements('id_descriptions');
            $table->text('description_en');
            $table->text('description_gr');
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
        Schema::dropIfExists('descriptions');
    }
}
