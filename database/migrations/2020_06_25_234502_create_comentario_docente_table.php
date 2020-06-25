<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentarioDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_docente', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_carga_materia_docente');
            $table->text('comentario');
            $table->foreign('id_carga_materia_docente')->references('id')->on('carga_materia_docente');
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
        Schema::dropIfExists('comentario_docente');
    }
}
