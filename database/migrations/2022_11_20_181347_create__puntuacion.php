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
        Schema::create('puntuacion', function (Blueprint $table) {
            $table->increments('idpuntuacion');
            $table->string('puntuacioncalificacion',50);
            $table->date('fechapuntuacion');
            $table->string('observaciones',100);

            $table->unsignedInteger('identrevista')->nullable();
            $table->foreign('identrevista')->references('identrevista')->on('entrevista');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puntuacion');
    }
};
