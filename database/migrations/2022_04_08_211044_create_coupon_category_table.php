<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_category', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('coupon_id')->index('coupon_category_coupon_id_index');
            $table->unsignedInteger('category_id')->index('coupon_category_category_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon_category');
    }
}
