<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidaEqusTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partida__equs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_equ1')->unsigned();
            $table->integer('id_equ2')->unsigned();
            $table->integer('ganador_par_equ')->unsigned();
            $table->date('fecha_par_equ')->nullable();
            $table->string('observacion_par_equ')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_equ1')->references('id')->on('inscripcion__equs')->onDelete('cascade');
            $table->foreign('id_equ2')->references('id')->on('inscripcion__equs')->onDelete('cascade');
            $table->foreign('ganador_par_equ')->references('id')->on('inscripcion__equs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('partida__equs');
    }
}
