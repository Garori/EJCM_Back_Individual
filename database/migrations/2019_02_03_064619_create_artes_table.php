<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('artes', function (Blueprint $table) {
          $table->increments('id');
          $table->string('autor');
          $table->string('tipo');
          $table->string('tamanho')->nullable();
          $table->string('data');
          $table->string('titulo');
          $table->string('doador')->nullable();
          $table->integer('fk_id_exposicao')->unsigned()->nullable();
          $table->timestamps();
      });
      Schema::table('artes', function (Blueprint $table) {
        $table->foreign('fk_id_exposicao')->references('id')->on('exposicaos')->onDelete('set null');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artes');
    }
}
