<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cndidatemigrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cndidatemigrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string ('DNI');
            $table->string ('name');
            $table->string('lastname');
            $table->integer('number_Simbolo');
            
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
