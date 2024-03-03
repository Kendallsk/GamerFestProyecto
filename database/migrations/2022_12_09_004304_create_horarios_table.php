<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_jue')->unsigned();
            $table->dateTime('hora_ini_hor')->nullable();
            $table->dateTime('hora_fin_hor')->nullable();
            $table->string('observacion_hor')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
        Schema::drop('horarios');
    }
}
