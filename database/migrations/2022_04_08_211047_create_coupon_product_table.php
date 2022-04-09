<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_product', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('coupon_id')->index('coupon_product_coupon_id_index');
            $table->unsignedInteger('product_id')->index('coupon_product_product_id_index');
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
        Schema::dropIfExists('coupon_product');
    }
}
