<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJudgeNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judge_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('judge');
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('real_news_id')->unsigned()->nullable();
            $table->foreign('real_news_id')->references('id')->on('real_news');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('judge_news');
    }
}
