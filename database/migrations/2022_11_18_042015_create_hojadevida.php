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
        Schema::create('hojadevida', function (Blueprint $table) {
            $table->increments('idhojadevida');
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('tipoidentificacion',50);
            $table->string('identificacion',20)->unique();
            $table->string('correo',100)->unique();
            $table->string('direccion',100);
            $table->string('telefono',15)->unique();
            $table->string('celular',15)->unique()->nullable();
            $table->string('estudios',100);
            $table->string('barrio',100)->nullable();
            $table->string('ciudad',100)->nullable();
            $table->date('fecharegistro');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hojadevida');
    }
};
