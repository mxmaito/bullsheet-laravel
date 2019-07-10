<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChekNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chek_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('chek1');
            $table->integer('chek2');
            $table->integer('chek3');
            $table->integer('chek4');
            $table->integer('chek5');
            $table->integer('chek6');
            $table->integer('chek7');
            $table->integer('chek8');
            $table->integer('chek9');
            $table->integer('chek10');
            $table->integer('chekresult');
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('fake_news_id')->unsigned()->nullable();
            $table->foreign('fake_news_id')->references('id')->on('fake_news');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chek_news');
    }
}
