<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatusAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatus_alumno', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_alumno');
            $table->uuid('id_movimiento_alumno');
            $table->date('fecha');
            $table->text('comentario')->nullable();            
            $table->foreign('id_alumno')->references('id')->on('alumno');
            $table->foreign('id_movimiento_alumno')->references('id')->on('movimiento_alumno');
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
        Schema::dropIfExists('estatus_alumno');
    }
}
