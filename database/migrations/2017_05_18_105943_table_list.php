<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list', function (Blueprint $table) {
            $table->increments('id_list');
            $table->integer('id_lagu')->unsigned();
            $table->integer('id_album')->unsigned();
            $table->integer('id_penyanyi')->unsigned();
        });

                Schema::table('list', function(Blueprint $table)
            {
                $table->foreign('id_lagu')->references('id_lagu')->on('lagu')->onUpdate('cascade')->onDelete('cascade');    
                $table->foreign('id_album')->references('id_album')->on('album')->onUpdate('cascade')->onDelete('cascade');

                $table->foreign('id_penyanyi')->references('id_penyanyi')->on('penyanyi')->onUpdate('cascade')->onDelete('cascade');    
            }); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('list');
    }
}
