<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReticulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reticula', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_nivel_academico');
            $table->foreign('id_nivel_academico')->references('id')->on('nivel_academico');
            $table->string('nombre');
            $table->string('rvoe')->nullable();
            $table->string('centro_trabajo');
            $table->text('descripcion');
            $table->double('costo_inscripcion', 8, 2);
            $table->double('costo_mensualidad', 8, 2);
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
        Schema::dropIfExists('reticula');
    }
}
