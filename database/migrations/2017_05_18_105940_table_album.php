<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableAlbum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function (Blueprint $table) {
            $table->increments('id_album');
            $table->string('nama_album');
            $table->integer('urutan_lagu');
            $table->integer('id_rekaman')->unsigned();  
        });
    
    Schema::table('album', function(Blueprint $table)
            {
                $table->foreign('id_rekaman')->references('id_rekaman')->on('rekaman')->onUpdate('cascade')->onDelete('cascade');    
            }); 
    
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('album');
    }
}
