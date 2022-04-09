<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliateCouponUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_coupon_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index('affiliate_coupon_user_user_id_index');
            $table->unsignedInteger('coupon_id')->index('affiliate_coupon_user_coupon_id_index');
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
        Schema::dropIfExists('affiliate_coupon_user');
    }
}
