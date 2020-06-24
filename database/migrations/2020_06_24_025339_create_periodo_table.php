<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodo', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre');
            $table->uuid('id_periodo_escolar');
            $table->uuid('id_ciclo_escolar');
            $table->foreign('id_periodo_escolar')->references('id')->on('periodo_escolar');
            $table->foreign('id_ciclo_escolar')->references('id')->on('ciclo_escolar');
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
        Schema::dropIfExists('periodo');
    }
}
