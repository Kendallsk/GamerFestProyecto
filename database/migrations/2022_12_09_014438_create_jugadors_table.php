<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadorsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_equ')->unsigned()->nullable();
            $table->string('nombre_jug')->nullable();
            $table->string('cedula_jug')->nullable();
            $table->string('telefono_jug')->nullable();
            $table->string('correo_jug')->nullable();
            $table->string('descripcion_jug')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_equ')->references('id')->on('equipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jugadors');
    }
}
