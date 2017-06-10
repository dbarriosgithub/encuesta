<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('jobs', function (Blueprint $table) {
          $table->increments('id');
          $table->string('sede');
          $table->string('actiname',500);
          $table->string('responsable');
          $table->integer('con_idcorporation')->unsigned();
          $table->foreign('con_idcorporation')->references('id')->on('corporations');
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
        Schema::drop('jobs');
    }
}
