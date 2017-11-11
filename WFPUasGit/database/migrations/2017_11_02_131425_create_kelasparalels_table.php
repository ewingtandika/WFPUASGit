<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasparalelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelasparalels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kp');
            $table->integer('kapasitas');
            $table->integer('matakuliah_id')->unsigned();
            $table->foreign('matakuliah_id')->references('id')->on('matakuliahs');
            $table->integer('dosen_id')->unsigned();
            $table->foreign('dosen_id')->references('id')->on('dosens');
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
        Schema::dropIfExists('kelasparalels');
    }
}
