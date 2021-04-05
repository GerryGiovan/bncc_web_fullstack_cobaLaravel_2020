<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListPeminatProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('list_peminat_project', function (Blueprint $table) {
             $table->id();
             $table->string('link_portfolio');
             $table->string('no_telp_pengguna');
             $table->unsignedBigInteger('id_pengguna');
             $table->unsignedBigInteger('id_lowongan');
         });

         Schema::table('list_peminat_project', function (Blueprint $table){
             $table->foreign('id_pengguna')->references('id')->on('pengguna');
             $table->foreign('id_lowongan')->references('id')->on('lowongan_kerja');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('list_peminat_project');
     }
}
