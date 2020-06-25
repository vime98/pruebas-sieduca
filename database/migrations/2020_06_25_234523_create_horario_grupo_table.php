<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorarioGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_grupo', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_carga_materia_docente');
            $table->date('dia');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->uuid('id_aula');
            $table->foreign('id_carga_materia_docente')->references('id')->on('carga_materia_docente');
            $table->foreign('id_aula')->references('id')->on('aula');
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
        Schema::dropIfExists('horario_grupo');
    }
}
