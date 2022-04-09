<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReviewHelpfulnessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_review_helpfulness', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_review_id')->index('product_review_helpfulness_product_review_id_index');
            $table->unsignedInteger('user_id')->index('product_review_helpfulness_user_id_index');
            $table->boolean('was_helpful')->default(1);
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
        Schema::dropIfExists('product_review_helpfulness');
    }
}
