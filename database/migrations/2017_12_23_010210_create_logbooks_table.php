<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logbooks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('segment');
            $table->string('source_problem');
            $table->string('impact');
            $table->string('description');
            $table->string('solved_by');
            $table->integer('marketing_id')->unsigned();
            $table->timestamps();

            $table->foreign('marketing_id')->references('id')
              ->on('marketings')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('logbooks');
    }
}
