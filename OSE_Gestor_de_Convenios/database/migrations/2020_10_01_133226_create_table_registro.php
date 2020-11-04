<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRegistro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro', function (Blueprint $table) {

            $table->bigIncrements('id_registro');
            $table->unsignedBigInteger('id_empresa');
            $table->unsignedBigInteger('id_contacto');
            $table->unsignedBigInteger('id_carrera');
            $table->unsignedBigInteger('id_convenio'); 
            $table->unsignedBigInteger('id_pdf');
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
        Schema::dropIfExists('registro');
    }
}
