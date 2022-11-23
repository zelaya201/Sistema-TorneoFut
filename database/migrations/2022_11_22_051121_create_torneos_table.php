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
        Schema::create('torneos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('nombre');
            $table->integer('estado');
            $table->bigInteger('id_organizador')->unsigned();
            $table->foreign('id_organizador')
                ->references('id')
                ->on('organizadores')
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
        Schema::dropIfExists('torneos');
    }
};
