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
        Schema::create('entrevista', function (Blueprint $table) {
            $table->increments('identrevista');
            $table->string('nombreentrevistador',100);
            $table->string('tipoentrevista',50);
            $table->string('lugar',50);
            $table->date('fecha');
            $table->string('hora',50);
            
            $table->unsignedInteger('idaspirante')->nullable();
            $table->foreign('idaspirante')->references('idaspirante')->on('aspirante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrevista');
    }
};
