<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituto', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre', 54);
            $table->string('calle');
            $table->integer('numero');
            $table->string('colonia');
            $table->string('cp', 10);
            $table->uuid('id_municipio');
            $table->string('telefono', 10);
            $table->string('correo');
            $table->string('imagen');
            $table->uuid('id_horario');
            $table->boolean('estado');
            $table->timestamps(); 
            $table->foreign('id_municipio')->references('id')->on('municipio');
            $table->foreign('id_horario')->references('id')->on('horario'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instituto');
    }
}
