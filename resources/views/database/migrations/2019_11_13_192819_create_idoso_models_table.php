<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdosoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idoso_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('inclinacao');
            $table->string('tamanho');
            $table->string('espacamento');
            $table->string('pressao');
            $table->string('pingando');
            $table->string('cruzando');
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
        Schema::dropIfExists('idoso_models');
    }
}
