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
        Schema::create('detalleservicio', function (Blueprint $table) {
            $table->increments('iddetalleservicio');
            $table->string('cantidadpersonal',50);
            $table->string('total',50);

            $table->unsignedInteger('idsolicitudservicio')->nullable();
            $table->foreign('idsolicitudservicio')->references('idsolicitudservicio')->on('solicitudservicio');

            $table->unsignedInteger('idservicio')->nullable();
            $table->foreign('idservicio')->references('idservicio')->on('servicio');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleservicio');
    }
};
