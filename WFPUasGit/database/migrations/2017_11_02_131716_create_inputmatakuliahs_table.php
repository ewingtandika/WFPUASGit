<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputmatakuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputmatakuliahs', function (Blueprint $table) {
            $table->integer('mahasiswa_id')->unsigned();
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas');
            $table->integer('kelasparalel_id')->unsigned();
            $table->foreign('kelasparalel_id')->references('id')->on('kelasparalels');
            $table->string('status');
            $table->integer('inputperwalian_id')->unsigned();
            $table->foreign('inputperwalian_id')->references('id')->on('inputperwalians');
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
        Schema::dropIfExists('inputmatakuliahs');
    }
}
