<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogos', function (Blueprint $table) {
            $table->increments('catalogos_id');
            $table->string('montadoraCarro');
            $table->string('nomeCarro');
            $table->string('corCarro');
            $table->string('anoCarro');
            $table->string('descricaoCarro');
            $table->float('precoCarro');
            $table->integer('kmCarro');
            $table->string('path');
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
        Schema::dropIfExists('catalogos');
    }
}
