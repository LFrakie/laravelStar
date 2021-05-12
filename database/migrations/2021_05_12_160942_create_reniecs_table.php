<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReniecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reniecs', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('appaterno');
            $table->string('apmaterno');
            $table->string('DNI');
            $table->string('sexo');
            $table->string('fecha_nac');
            $table->string('departamento');
            $table->string('provincia');
            $table->string('distrito');

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
        Schema::dropIfExists('reniecs');
    }
}
