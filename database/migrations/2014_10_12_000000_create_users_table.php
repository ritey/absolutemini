<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('enabled')->default(1);
            $table->string('name');
            $table->string('category_id');
            $table->string('slug');
            $table->string('page_title',255);
            $table->string('meta_description',255);
            $table->text('summary',512);
            $table->text('content');
            $table->timestamps();

            $table->index('enabled');
            $table->index('slug');
            $table->index('category_id');
            $table->index('content_group');
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('enabled')->default(1);
            $table->string('name');
            $table->string('slug');
            $table->string('page_title',255);
            $table->string('meta_description',255);
            $table->timestamps();

            $table->index('enabled');
            $table->index('slug');
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('enabled')->default(1);
            $table->string('name');
            $table->string('slug');
            $table->string('page_title',255);
            $table->string('meta_description',255);
            $table->timestamps();

            $table->index('enabled');
            $table->index('slug');
        });

        Schema::create('taggables', function (Blueprint $table) {
            $table->integer('tag_id');
            $table->integer('taggable_id');
            $table->string('taggable_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('contents');
        Schema::drop('categories');
        Schema::drop('tags');
        Schema::drop('taggables');
    }
}
