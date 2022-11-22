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
            $table->string('identificacion',20)->unique();
            $table->string('correo')->unique();
            $table->string('direccion',100);
            $table->string('telefono',15)->unique();
            $table->date('fechanacimiento');
            $table->string('edad',3);
            $table->string('estudios',100);
            $table->string('competencias',100);
            $table->string('experiencialaboral',100)->nullable();
            $table->string('referencialaboral',100)->nullable();
            $table->string('referenciapersonal',100)->nullable();
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
