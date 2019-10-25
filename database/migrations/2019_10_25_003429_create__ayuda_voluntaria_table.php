<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyudaVoluntariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayuda_voluntarias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tipo_trabajo');
            $table->integer('cantidad_personas');
            $table->integer('cantidad_maxima');
            $table->date('fecha');
           // $table->timestamps('duracion');
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
        Schema::dropIfExists('ayuda_voluntarias');
    }
}