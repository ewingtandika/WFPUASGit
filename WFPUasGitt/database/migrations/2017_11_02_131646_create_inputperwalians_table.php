<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputperwaliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputperwalians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->datetime('tanggal_mulai');
            $table->datetime('tanggal_selesai');
            $table->string('status');
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
        Schema::dropIfExists('inputperwalians');
    }
}
