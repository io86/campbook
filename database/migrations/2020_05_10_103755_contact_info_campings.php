<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactInfoCampings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_info_campings', function (Blueprint $table) {
            $table->bigIncrements('id_contact_info_camping');
            $table->string('email_camping', 200);
            $table->string('website', 200);
            $table->string('tel', 200);
            $table->string('postcode', 20);
            $table->timestamp('published_at');
            $table->timestamps();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_status')->references('id_status')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_info_campings');
    }
}
