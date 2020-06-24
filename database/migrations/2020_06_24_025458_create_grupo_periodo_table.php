<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoPeriodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_periodo', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_grupo');
            $table->foreign('id_grupo')->references('id')->on('grupo');
            $table->uuid('id_periodo');
            $table->foreign('id_periodo')->references('id')->on('periodo');
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
        Schema::dropIfExists('grupo_periodo');
    }
}
