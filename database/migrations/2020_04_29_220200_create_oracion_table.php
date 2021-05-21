<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOracionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oracions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres')->nullable(false)->default('');
            $table->string('correo')->nullable(false)->default('');
            $table->string('celular')->nullable(false)->default('');
            $table->string('pais')->nullable(true)->default('-');
            $table->string('tipopeticion')->nullable(true)->default('-');
            $table->string('peticion')->nullable(true)->default('-');
            $table->string('suscripcion')->nullable(true)->default('-');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oracions');
    }
}
