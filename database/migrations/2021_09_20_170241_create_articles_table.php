<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id('article_id');
            $table->timestamps();
            $table->string('article_title', 100);
            $table->string('article_description', 200);
            $table->string('article_text', 2500);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
