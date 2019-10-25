<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioDonacionRecursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_donacion_recursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            //LLAVES FORANEAS
            $table->integer('id_donacion_recurso')->unsigned();
            $table->foreign('id_donacion_recurso')->references('id')->on('donacion_recursos')->onDelete('cascade');

            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_donacion_recursos');
    }
}