<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableLagu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lagu', function (Blueprint $table) {
            $table->increments('id_lagu');
            $table->string('judul');
            $table->string('durasi');
            $table->integer('tahun_release');
            $table->integer('id_bahasa')->unsigned();
            $table->integer('id_gendre')->unsigned();
        });

        Schema::table('lagu', function(Blueprint $table)
            {
                $table->foreign('id_bahasa')->references('id_bahasa')->on('bahasa')->onUpdate('cascade')->onDelete('cascade');    
                $table->foreign('id_gendre')->references('id_gendre')->on('gendre')->onUpdate('cascade')->onDelete('cascade');    
            }); 
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lagu');
    }
}
