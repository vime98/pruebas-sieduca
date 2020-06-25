<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_materia', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_materia');
            $table->foreign('id_materia')->references('id')->on('materia');
            $table->uuid('id_alumno');
            $table->foreign('id_alumno')->references('id')->on('alumno');
            $table->double('calificacion_final', 8, 2);
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
        Schema::dropIfExists('alumno_materia');
    }
}
