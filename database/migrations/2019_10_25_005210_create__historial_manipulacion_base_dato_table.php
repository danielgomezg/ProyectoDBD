<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialManipulacionBaseDatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_manipulacion_base_datos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tipo_accion');
            $table->date('fecha_accion');
            $table->timestamps();

            //LLAVES FORANEAS
            $table->integer('id_rol')->unsigned();
            $table->foreign('id_rol')->references('id')->on('rols')->onDelete('cascade');

            $table->integer('id_permiso')->unsigned();
            $table->foreign('id_permiso')->references('id')->on('permisos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_manipulacion_base_datos');
    }
}
