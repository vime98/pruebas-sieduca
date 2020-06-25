<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionAlumnoMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion_alumno_materia', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_carga_materia_docente');
            $table->foreign('id_carga_materia_docente')->references('id')->on('carga_materia_docente');
            $table->uuid('id_alumno');
            $table->foreign('id_alumno')->references('id')->on('alumno');
            $table->double('parcial_01', 8, 2);
            $table->double('parcial_02', 8, 2);
            $table->double('parcial_03', 8, 2);
            $table->double('parcial_04', 8, 2);
            $table->double('parcial_05', 8, 2);
            $table->double('parcial_06', 8, 2);
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
        Schema::dropIfExists('calificacion_alumno_materia');
    }
}
