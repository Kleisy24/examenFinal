<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cabinmigrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabinmigrations', function (Blueprint $table) {
            $table->bigIncrements('code');
            $table->string ('location');
            $table->bigInteger('id_Elector')->unsigned();
            $table->foreign('id_Elector')->references('id')->on('electormigrations');
              
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
