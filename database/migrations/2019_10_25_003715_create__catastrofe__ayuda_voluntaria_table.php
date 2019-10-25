<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatastrofeAyudaVoluntariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catastrofe_ayuda_voluntarias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            //LLAVES FORANEAS
            $table->integer('id_ayuda_voluntaria')->unsigned();
            $table->foreign('id_ayuda_voluntaria')->references('id')->on('ayuda_voluntarias')->onDelete('cascade');

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
        Schema::dropIfExists('catastrofe_ayuda_voluntarias');
    }
}