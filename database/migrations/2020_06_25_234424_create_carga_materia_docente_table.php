<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargaMateriaDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carga_materia_docente', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_grupo_periodo');
            $table->foreign('id_grupo_periodo')->references('id')->on('grupo_periodo');
            $table->uuid('id_personal');
            $table->foreign('id_personal')->references('id')->on('personal');
            $table->uuid('id_materia');
            $table->foreign('id_materia')->references('id')->on('materia');
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
        Schema::dropIfExists('carga_materia_docente');
    }
}
