<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nacimiento');
            $table->double('estatura');
            $table->integer('estado');
            $table->bigInteger('id_posicion')->unsigned();
            $table->foreign('id_posicion')
                ->references('id')
                ->on('posiciones')
                ->onDelete('cascade');
            $table->bigInteger('id_equipo')->unsigned();
            $table->foreign('id_equipo')
                ->references('id')
                ->on('equipos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugadors');
    }
};
