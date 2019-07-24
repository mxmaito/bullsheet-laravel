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
            $table->bigInteger('cheks_id')->unsigned()->nullable();
            $table->foreign('cheks_id')->references('id')->on('cheks');
            $table->bigInteger('value');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('fake_news_id')->unsigned()->nullable();
            $table->foreign('fake_news_id')->references('id')->on('fake_news');
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
        Schema::dropIfExists('chek_news');
    }
}
