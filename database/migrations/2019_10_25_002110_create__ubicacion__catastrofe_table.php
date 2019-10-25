<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionCatastrofeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacion_catastrofes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            //LLAVES FORANEAS
            $table->integer('id_ubicacion')->unsigned();
            $table->foreign('id_ubicacion')->references('id')->on('ubicacions')->onDelete('cascade');

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
        Schema::dropIfExists('ubicacion_catastrofes');
    }
}