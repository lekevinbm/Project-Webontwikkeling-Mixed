<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspraakvraagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspraakvraag', function(Blueprint $table){
          $table->increments('id');
          $table->text('vraag');
          $table->foreign('fase_id')
            ->references('project_fase')
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
        Schema::drop('inspraakvraag');
    }
}
