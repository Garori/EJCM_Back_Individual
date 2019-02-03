<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExposicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


      Schema::create('exposicaos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('tipo');
          $table->string('ala')->nullable();
          $table->string('nome_da_sala');
          $table->integer('qtd_de_artes');
          $table->string('inicio_data');
          $table->string('data_de_termino')->nullable();
          $table->string('responsavel');
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
        Schema::dropIfExists('exposicaos');
    }
}
