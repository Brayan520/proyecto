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
        Schema::create('vacantes', function (Blueprint $table) {
            $table->increments('idvacante');
            $table->string('experiencia',50);
            $table->string('horario',50);
            $table->string('disponibilidad',50);

            $table->unsignedInteger('idcargo')->nullable();
            $table->foreign('idcargo')->references('idcargo')->on('cargo');

            $table->unsignedInteger('idperfil')->nullable();
            $table->foreign('idperfil')->references('idperfil')->on('perfil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacantes');
    }
};
