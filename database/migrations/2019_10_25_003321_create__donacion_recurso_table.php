<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonacionRecursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donacion_recursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tipo_donacion');
            $table->string('nombre_recurso');
            $table->float('cantidad');
            $table->float('cantidad_maxima');
            $table->string('unidad');
            $table->boolean('expira');
            $table->date('fecha_expiracion');
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
        Schema::dropIfExists('donacion_recursos');
    }
}