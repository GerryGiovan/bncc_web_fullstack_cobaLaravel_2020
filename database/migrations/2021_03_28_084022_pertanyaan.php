<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('pertanyaan', function (Blueprint $table) {
             $table->id();
             $table->string('judul');
             $table->string('isi');
             $table->unsignedBigInteger('vote');
             $table->string('jawaban_terbaik');
             $table->timestamp('time');
             $table->unsignedBigInteger('id_jawaban');
             $table->unsignedBigInteger('id_pengguna');
         });

         Schema::table('pertanyaan', function (Blueprint $table){
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
         Schema::dropIfExists('pertanyaan');
     }
}
