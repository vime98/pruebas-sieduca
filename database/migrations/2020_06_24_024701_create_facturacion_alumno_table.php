<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturacionAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturacion_alumno', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_alumno');
            $table->string('nombre');
            $table->string('calle');
            $table->integer('num_interno');
            $table->integer('num_externo');
            $table->string('colonia');
            $table->string('cp', 10);
            $table->string('estado');
            $table->string('ciudad');
            $table->string('municipio');
            $table->string('rfc');
            $table->foreign('id_alumno')->references('id')->on('alumno');
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
        Schema::dropIfExists('facturacion_alumno');
    }
}
