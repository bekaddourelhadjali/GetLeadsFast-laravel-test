<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponUsageHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_usage_history', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index('coupon_usage_history_user_id_index');
            $table->unsignedInteger('order_id')->index('coupon_usage_history_order_id_index');
            $table->unsignedInteger('coupon_id')->index('coupon_usage_history_coupon_id_index');
            $table->string('coupon_code');
            $table->dateTime('coupon_start_date');
            $table->dateTime('coupon_end_date');
            $table->boolean('coupon_free_shipping')->default(0);
            $table->boolean('coupon_use_percentage')->default(0);
            $table->decimal('coupon_discount_amount', 15, 4)->default(0.0000);
            $table->unsignedInteger('coupon_limit_per_user')->default(0);
            $table->unsignedInteger('coupon_limit_per_usage')->default(0);
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
        Schema::dropIfExists('coupon_usage_history');
    }
}
