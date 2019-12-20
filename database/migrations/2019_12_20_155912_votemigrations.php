<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Votemigrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votemigrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger ('code_cabin')->unsigned();
            $table->bigInteger ('id_Candidate')->unsigned();
            $table->date ('date');
            $table->time('time');
            $table->foreign('code_cabin')->references('code')->on('cabinmigrations');
            $table->foreign('id_Candidate')->references('id')->on('cndidatemigrations');
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
