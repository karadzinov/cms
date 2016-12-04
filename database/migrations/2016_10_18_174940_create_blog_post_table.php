<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostTable extends Migration
{

    public function up()
    {
        Schema::create('blogposts', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('slug');
            $table->string('image');
            $table->string('imagemedium');
            $table->string('imagethumb');
            $table->string('imagedescription');
            $table->string('imageauthor');
            $table->string('imagelink');
            $table->string('credit');
            $table->string('originallink');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->integer('blog_id')->unsigned();
            $table->foreign('blog_id')->references('id')->on('blog');
            $table->text('description');
            $table->integer('creator')->unsigned();
            $table->foreign('creator')->references('id')->on('users');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->double('lat',20,10);
            $table->double('lng',20,10);
            $table->integer('workflow_id')->unsigned();
            $table->foreign('workflow_id')->references('id')->on('workflow');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('blogposts');
    }
}
