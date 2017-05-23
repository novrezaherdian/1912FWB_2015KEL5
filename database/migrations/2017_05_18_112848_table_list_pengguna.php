<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableListPengguna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_pengguna', function (Blueprint $table) {
            $table->increments('id_list_pengguna');
            $table->integer('id_pengguna')->unsigned();
            $table->integer('id_list')->unsigned();

            
        });
         Schema::table('list_pengguna', function(Blueprint $table)
            {
                $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onUpdate('cascade')->onDelete('cascade');  
                $table->foreign('id_list')->references('id_list')->on('list')->onUpdate('cascade')->onDelete('cascade');  
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('list_pengguna');
    }
}
