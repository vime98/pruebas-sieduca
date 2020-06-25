<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_alumno', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_alumno');
            $table->foreign('id_alumno')->references('id')->on('alumno');
            $table->uuid('id_precio_extra');
            $table->foreign('id_precio_extra')->references('id')->on('precio_extra');
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
        Schema::dropIfExists('extra_alumno');
    }
}
