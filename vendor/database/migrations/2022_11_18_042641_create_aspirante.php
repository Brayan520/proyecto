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
        Schema::create('aspirante', function (Blueprint $table) {
            $table->increments('idaspirante');

            $table->unsignedInteger('idhojadevida')->nullable();
            $table->foreign('idhojadevida')->references('idhojadevida')->on('hojadevida');

            $table->unsignedInteger('idpostulacion')->nullable();
            $table->foreign('idpostulacion')->references('idpostulacion')->on('postulaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aspirante');
    }
};
