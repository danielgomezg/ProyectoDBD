<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatastrofeDonacionRecursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catastrofe_donacion_recursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            //LLAVES FORANEAS
            $table->integer('id_donacion_recurso')->unsigned();
            $table->foreign('id_donacion_recurso')->references('id')->on('donacion_recursos')->onDelete('cascade');

            $table->integer('id_catastrofe')->unsigned();
            $table->foreign('id_catastrofe')->references('id')->on('catastrofes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catastrofe_donacion_recursos');
    }
}
