<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pelanggan');
            $table->string('username');
            $table->string('alamat');
            $table->string('paket_langganan');
            $table->integer('id_customer')->unsigned();
            $table->foreign('id_customer')->references('id')
              ->on('users')->onDelete('cascade')->onUpdate('cascade');
              
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
        Schema::dropIfExists('marketings');
    }
}
