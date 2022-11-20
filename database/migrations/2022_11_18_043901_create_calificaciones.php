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
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->increments('idcalificacion');
            $table->string('puntuacioncalificacion',50);
            $table->date('fechacalificacion');
            $table->string('observaciones',100);

            $table->unsignedInteger('idcontratoservicio')->nullable();
            $table->foreign('idcontratoservicio')->references('idcontratoservicio')->on('contratoservicio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificaciones');
    }
};
