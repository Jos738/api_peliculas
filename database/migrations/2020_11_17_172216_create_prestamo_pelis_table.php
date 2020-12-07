<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamoPelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo_pelis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->date('fecha_devol');
            $table->string('estado');
            $table->integer('id_peliculas')->unsigned();
            $table->integer('id_clientes')->unsigned();
            $table->foreign('id_peliculas')->references('id')->on('peliculas');
            $table->foreign('id_clientes')->references('id')->on('clientes');
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
        Schema::dropIfExists('prestamo_pelis');
    }
}
