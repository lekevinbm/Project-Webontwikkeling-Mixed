<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectFaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_fase', function(Blueprint $table){
          $table->increments('id');
          $table->string('naam');
          $table->date('begin');
          $table->datetime('einde');
          $table->foreign('project_id')
            ->references('project')
            ->on('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('project_fase');
    }
}
