<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->nullable()->index('categories_parent_id_index');
            $table->integer('lft')->nullable()->index('categories_lft_index');
            $table->integer('rgt')->nullable()->index('categories_rgt_index');
            $table->integer('depth')->nullable();
            $table->integer('picture_id')->nullable()->index('categories_picture_id_index');
            $table->integer('store_id')->nullable()->index('categories_store_id_index');
            $table->integer('old_picture_id')->nullable()->index('categories_old_picture_id_index');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('in_stock_message')->nullable();
            $table->string('out_of_stock_message')->nullable();
            $table->boolean('description_published')->default(1);
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->boolean('published')->default(1);
            $table->boolean('hide_from_guests')->default(0);
            $table->boolean('deleted')->default(0);
            $table->boolean('display_order')->default(0);
            $table->timestamps();
            $table->string('seo_title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
