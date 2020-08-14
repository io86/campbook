<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PhotosCamping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos_camping', function (Blueprint $table) {
            $table->bigIncrements('id_photos_camping');
            $table->string('img1', 200);
            $table->string('img2', 200);
            $table->string('img3', 200);
            $table->string('img4', 200);
            $table->string('img5', 200);
            $table->string('img6', 200);
            $table->string('img7', 200);
            $table->string('img8', 200);
            $table->string('img9', 200);
            $table->string('img10', 200);
            $table->string('img11', 200);
            $table->string('img12', 200);
            $table->string('img13', 200);
            $table->string('img14', 200);
            $table->string('img15', 200);
            $table->string('img16', 200);
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
        Schema::dropIfExists('photos_camping');
    }
}
