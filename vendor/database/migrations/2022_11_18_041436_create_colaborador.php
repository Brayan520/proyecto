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
         Schema::create('colaborador', function (Blueprint $table) {
             $table->increments('idcolaborador');
             $table->string('nombre',100)->nullable();
             $table->string('apellido')->nullable();
             $table->string('celular')->unique()->nullable();
            
         });
     }
 
     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('colaborador');
     }
 };
 
