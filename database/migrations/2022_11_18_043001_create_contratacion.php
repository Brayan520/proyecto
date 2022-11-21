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
        Schema::create('contratacion', function (Blueprint $table) {
            $table->increments('idcontratacion');
            $table->string('terminolaboral',50);
            $table->date('fechainicial');
            $table->date('fechafinal')->nullable();
            $table->string('sueldo',50);

            $table->unsignedInteger('idcolaborador')->nullable();
            $table->foreign('idcolaborador')->references('idcolaborador')->on('colaborador');

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
        Schema::dropIfExists('contratacion');
    }
};
