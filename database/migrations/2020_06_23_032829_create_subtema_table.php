<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtema', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre', 54);
            $table->uuid('id_tema');
            $table->foreign('id_tema')->references('id')->on('temario');
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
        Schema::dropIfExists('subtema');
    }
}
