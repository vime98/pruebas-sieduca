<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrecioExtraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precio_extra', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre');
            $table->float('costo', 8, 2);
            $table->uuid('id_instituto');
            $table->foreign('id_instituto')->references('id')->on('instituto');
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
        Schema::dropIfExists('precio_extra');
    }
}
