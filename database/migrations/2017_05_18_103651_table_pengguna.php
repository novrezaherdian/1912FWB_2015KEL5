<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePengguna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->increments('id_pengguna');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->integer('umur');
            $table->text('alamat');
            $table->integer('id_akun')->unsigned();            
        });

        Schema::table('pengguna', function(Blueprint $table)
            {
                $table->foreign('id_akun')->references('id')->on('akun')->onUpdate('cascade')->onDelete('cascade');    
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pengguna');
    }
}
