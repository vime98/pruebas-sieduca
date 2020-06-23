<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estado', function (Blueprint $table) {
            //
            $table->uuid('id')->primary();
            $table->string('nombre');
            $table->uuid('id_pais');
            $table->string('estado');
            $table->timestamps();
            $table->foreign('id_pais')->references('id')->on('pais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estado', function (Blueprint $table) {
            //
        });
    }
}
