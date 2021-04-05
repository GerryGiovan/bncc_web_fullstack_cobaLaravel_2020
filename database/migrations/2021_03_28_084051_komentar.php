<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Komentar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('komentar', function (Blueprint $table) {
             $table->id();
             $table->string('isi');
             $table->timestamp('time');
             $table->string('nama_komentator');
             $table->unsignedBigInteger('id_komentar');
             $table->unsignedBigInteger('id_pertanyaan');
             $table->unsignedBigInteger('id_jawaban');
             $table->unsignedBigInteger('id_pengguna');
         });

         Schema::table('komentar', function (Blueprint $table){
             $table->foreign('id_komentar')->references('id')->on('komentar');
             $table->foreign('id_pertanyaan')->references('id')->on('pertanyaan');
             $table->foreign('id_jawaban')->references('id')->on('jawaban');
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
         Schema::dropIfExists('komentar');
     }
}
