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
        Schema::create('pqrs', function (Blueprint $table) {
            $table->increments('idpqrs');
            $table->string('descripcion',200);
            $table->date('fecha');

            $table->unsignedInteger('idtipopqrs')->nullable();
            $table->foreign('idtipopqrs')->references('idtipopqrs')->on('tipopqrs');

            $table->unsignedInteger('idestado')->nullable();
            $table->foreign('idestado')->references('idestado')->on('estado');

            $table->unsignedInteger('idcontratoservicio')->nullable();
            $table->foreign('idcontratoservicio')->references('idcontratoservicio')->on('contratoservicio');

            $table->unsignedInteger('idrespuesta')->nullable();
            $table->foreign('idrespuesta')->references('idrespuesta')->on('respuesta');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pqrs');
    }
};