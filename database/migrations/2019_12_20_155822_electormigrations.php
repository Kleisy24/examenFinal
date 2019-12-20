<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Electormigrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electormigrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string ('DNI');
            $table->string ('name');
            $table->string('lastname');
            $table->string('gender');
            $table->string('suitable');
            
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
