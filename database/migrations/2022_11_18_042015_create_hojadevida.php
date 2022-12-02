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
            $table->string('estadocivil',30);
            $table->string('telefonoprincipal',15)->unique();
            $table->string('telefonosecundario',15)->unique()->nullable();
            $table->date('fechanacimiento');
            $table->string('edad',2);
            $table->string('estudios',100);
            $table->string('otrosestudios',100)->nullable();
            $table->string('detallecarrera',100)->nullable();
            $table->string('institucion',100)->nullable();
            $table->string('estado',100)->nullable();
            $table->string('competencias',100)->nullable();
            $table->string('experiencialaboral',100)->nullable();
            $table->string('fechaingreso')->nullable();
            $table->string('fechasalida')->nullable();
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
