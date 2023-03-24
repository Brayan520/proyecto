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
    Schema::create('contratoservicio', function (Blueprint $table) {
        $table->increments('idcontratoservicio');
        $table->string('direccion',100);
        $table->date('fechainicial');
        $table->date('fechafinal');

        $table->unsignedInteger('idsolicitudservicio')->nullable();
        $table->foreign('idsolicitudservicio')->references('idsolicitudservicio')->on('solicitudservicio');

        $table->unsignedInteger('idcolaborador')->nullable();
        $table->foreign('idcolaborador')->references('idcolaborador')->on('colaborador');

    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::dropIfExists('contratoservicio');
}
};

