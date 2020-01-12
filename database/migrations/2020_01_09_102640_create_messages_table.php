<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_UserOrigin')->unsigned();
            $table->bigInteger('id_UserDestinity')->unsigned();
            $table->bigInteger('truekeoOrigin')->unsigned();
            $table->bigInteger('truekeoDestinity')->unsigned();
            $table->string('message');
            $table->foreign('id_UserOrigin')->references('id')->on('users');
            $table->foreign('truekeoOrigin')->references('id')->on('products');
            $table->foreign('id_UserDestinity')->references('id')->on('users');
            $table->foreign('truekeoDestinity')->references('id')->on('products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
