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
            $table->increments('id');
            $table->unsignedInteger('store_id')->index('articles_store_id_index');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('title');
            $table->text('summary')->nullable();
            $table->longText('content');
            $table->boolean('allow_comments')->default(1);
            $table->integer('comment_count')->default(0);
            $table->string('thumbnail')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->tinyInteger('published');
            $table->boolean('deleted')->default(0);
            $table->timestamps();
            $table->string('slug')->unique('articles_slug_unique');
            $table->string('author')->nullable();
            $table->text('custom_js')->nullable();
            $table->text('custom_css')->nullable();
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
