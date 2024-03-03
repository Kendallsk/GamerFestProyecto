<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionEqusTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion__equs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_equ')->unsigned();
            $table->integer('id_jue')->unsigned();
            $table->decimal('precio_ins_equ');
            $table->binary('pago_ins_equ');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_equ')->references('id')->on('equipos')->onDelete('cascade');
            $table->foreign('id_jue')->references('id')->on('juegos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inscripcion__equs');
    }
}
