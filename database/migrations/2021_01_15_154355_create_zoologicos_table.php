<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZoologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zoologicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('ciudad');
            $table->string('pais');
            $table->integer('area');
            $table->integer('presupuesto');
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
        Schema::dropIfExists('zoologicos');
    }
}
