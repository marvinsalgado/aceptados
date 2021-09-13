<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAceptadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aceptados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subsistema');
            $table->string('cct');
            $table->string('nombre_cct');
            $table->string('folio');
            $table->string('paterno');
            $table->string('materno');
            $table->string('nombre');
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
        Schema::dropIfExists('aceptados');
    }
}
