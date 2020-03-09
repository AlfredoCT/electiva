<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesarrolladoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desarrolladores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nombre');
            $table->String('apellido');
            $table->String('telefono');
            $table->String('direccion');
            $table->bigInteger('idProyecto')->unsigned();
            $table->foreign('idProyecto')->references('id')->on('proyectos');
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
        Schema::dropIfExists('desarrolladors');
    }
}
