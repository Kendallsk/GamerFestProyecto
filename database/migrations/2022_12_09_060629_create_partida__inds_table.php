<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidaIndsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partida__inds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_jug1')->unsigned();
            $table->integer('id_jug2')->unsigned();
            $table->integer('ganador_par_ind')->unsigned();
            $table->dateTime('fecha_par_ind')->nullable();
            $table->string('observacion_par_ind')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_jug1')->references('id')->on('inscripcion__inds')->onDelete('cascade');
            $table->foreign('id_jug2')->references('id')->on('inscripcion__inds')->onDelete('cascade');
            $table->foreign('ganador_par_ind')->references('id')->on('inscripcion__inds')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('partida__inds');
    }
}
