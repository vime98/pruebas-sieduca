<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre', 54);
            $table->tinyInteger('grado');
            $table->string('creditos', 3);
            $table->uuid('id_actividad')->nullable();
            $table->foreign('id_actividad')->references('id')->on('actividad');
            $table->text('descripcion');
            $table->uuid('id_prerequisito')->nullable();
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
        Schema::dropIfExists('materia');
    }
}
