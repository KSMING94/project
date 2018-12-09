<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMyboards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myboards', function (Blueprint $table) {
            $table->increments('num');
            $table->string('title', 40);
            $table->string('writer', 20);
            $table->text('content', 20);
            $table->timestamp('regtime')->defalut(now());
            $table->integer('hits')->unsigned()->defalut(0);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *s
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('myboards');
    }
}
a