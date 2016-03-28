<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectThemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_thema', function(Blueprint $table){
          $table->increments('id');
          $table->string('naam');
          $table->text('beschrijving');
          $table->foreign('project_id')
            ->references('id')
            ->on('project');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('project_thema');
    }
}
