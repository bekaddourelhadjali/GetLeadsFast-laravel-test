<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index('product_reviews_user_id_index');
            $table->unsignedInteger('product_id')->index('product_reviews_product_id_index');
            $table->boolean('approved')->default(0);
            $table->string('title');
            $table->text('review_text');
            $table->tinyInteger('rating')->default(5);
            $table->integer('helpful_total')->default(0);
            $table->integer('not_helpful_total')->default(0);
            $table->boolean('contain_bad_words')->default(0);
            $table->boolean('deleted')->default(0);
            $table->text('admin_comment')->nullable();
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
        Schema::dropIfExists('product_reviews');
    }
}
