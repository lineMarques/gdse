<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ponto_operacaos', function (Blueprint $table) {
            $table->id('objectid');
            $table->string('codigo_est');
            $table->integer('ano');
            $table->string('uf');
            $table->string('entidade_r');
            $table->string('corpo_dagu');
            $table->float('latitude');
            $table->float('longitude');
            $table->float('lon');
            $table->float('lat');
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
        Schema::dropIfExists('ponto_operacaos');
    }
};

