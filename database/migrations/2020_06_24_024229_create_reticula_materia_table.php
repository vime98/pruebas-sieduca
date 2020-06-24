<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReticulaMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reticula_materia', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_reticula');
            $table->uuid('id_materia');
            $table->foreign('id_reticula')->references('id')->on('reticula');
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
        Schema::dropIfExists('reticula_materia');
    }
}
