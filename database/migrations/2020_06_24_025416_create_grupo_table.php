<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_reticula');
            $table->string('nombre');
            $table->string('clave');
            $table->uuid('id_periodo_escolar');
            $table->integer('num_parciales');
            $table->integer('num_extras');
            $table->integer('grado');
            $table->boolean('estado');
            $table->foreign('id_reticula')->references('id')->on('reticula');
            $table->foreign('id_periodo_escolar')->references('id')->on('periodo_escolar');
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
        Schema::dropIfExists('grupo');
    }
}
