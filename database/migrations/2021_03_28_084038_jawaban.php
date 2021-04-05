<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('jawaban', function (Blueprint $table) {
             $table->id();
             $table->string('isi');
             $table->unsignedBigInteger('vote');
             $table->timestamp('time');
             $table->unsignedBigInteger('id_pertanyaan');
             $table->unsignedBigInteger('id_pengguna');
         });

         Schema::table('jawaban', function (Blueprint $table) {
             $table->foreign('id_pertanyaan')->references('id')->on('pertanyaan');
             $table->foreign('id_pengguna')->references('id')->on('pengguna');
         });
    }
     /**
      * Reverse the migrations.
      *
      * @return void
      */
      public function down()
      {
          Schema::dropIfExists('jawaban');
      }
}
