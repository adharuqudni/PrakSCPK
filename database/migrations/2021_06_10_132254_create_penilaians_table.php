<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->integer('wawasan_umum')->unsigned();
            $table->integer('kemampuan_bicara')->unsigned();
            $table->integer('karya_cipta')->unsigned();
            $table->integer('kepimimpinan')->unsigned();
            $table->integer('prestasi')->unsigned();
            $table->integer('perilaku')->unsigned();
            $table->integer('usia')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaians');
    }
}
