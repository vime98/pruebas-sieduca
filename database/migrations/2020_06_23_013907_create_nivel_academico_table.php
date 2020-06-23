<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNivelAcademicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivel_academico', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreign('id_instituto')->references('id')->on('instituto');
            $table->foreign('id_nivel')->references('id')->on('nivel');
            $table->string('cedula');
            $table->foreign('id_horario')->references('id')->on('horario');
            $table->foreign('id_modalidad')->references('id')->on('modalidad');
            $table->boolean('estado');
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
        Schema::dropIfExists('nivel_academico');
    }
}
