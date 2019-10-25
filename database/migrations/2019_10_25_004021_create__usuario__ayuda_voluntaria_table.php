<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioAyudaVoluntariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_ayuda_voluntarias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            //LLAVES FORANEAS
            $table->integer('id_ayuda_voluntaria')->unsigned();
            $table->foreign('id_ayuda_voluntaria')->references('id')->on('ayuda_voluntarias')->onDelete('cascade');

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
        Schema::dropIfExists('usuario_ayuda_voluntarias');
    }
}