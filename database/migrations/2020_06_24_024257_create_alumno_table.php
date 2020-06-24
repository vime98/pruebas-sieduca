<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('matricula');
            $table->string('clave_control');
            $table->string('curp', 30);
            $table->string('nombre', 54);
            $table->string('apellido_paterno', 54);
            $table->string('apellido_materno', 54)->nullable();
            $table->date('fecha_nacimiento');
            $table->text('foto');
            $table->string('calle', 54);
            $table->string('numero', 10);
            $table->string('colonia', 54);
            $table->string('cp', 5);
            $table->string('telefono', 20);
            $table->string('celular', 20);
            $table->uuid('id_municipio');
            $table->foreign('id_municipio')->references('id')->on('municipio');
            $table->string('correo', 54);
            $table->uuid('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('escuela_procedencia', 54);
            $table->string('promedio_anterior', 5);
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
        Schema::dropIfExists('alumno');
    }
}
