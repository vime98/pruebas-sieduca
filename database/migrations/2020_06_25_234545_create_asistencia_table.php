<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencia', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_carga_materia_docente');
            $table->date('fecha');
            $table->uuid('id_alumno');
            $table->foreign('id_carga_materia_docente')->references('id')->on('carga_materia_docente');
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
        Schema::dropIfExists('asistencia');
    }
}
