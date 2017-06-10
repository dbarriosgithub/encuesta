<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorporationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_inicio');
            $table->date('fecha_finalizacion');
            $table->string('responsable_name');
            $table->string('por_avance');
            $table->string('objetivos');
            $table->string('firma');
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
        Schema::drop('corporations');
    }
}
