<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBecaAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beca_alumno', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_alumno');
            $table->foreign('id_alumno')->references('id')->on('alumno');
            $table->uuid('id_tipo_beca');
            $table->foreign('id_tipo_beca')->references('id')->on('tipo_beca');
            $table->integer('porcentaje');
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
        Schema::dropIfExists('beca_alumno');
    }
}
