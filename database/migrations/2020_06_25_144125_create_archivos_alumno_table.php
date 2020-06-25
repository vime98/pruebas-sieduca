<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivosAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos_alumno', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_alumno');
            $table->foreign('id_alumno')->references('id')->on('alumno');
            $table->uuid('id_archivos');
            $table->foreign('id_archivos')->references('id')->on('archivos');
            $table->string('archivo');
            $table->boolean('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivos_alumno');
    }
}
