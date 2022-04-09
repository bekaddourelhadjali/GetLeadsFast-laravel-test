<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponManufacturerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_manufacturer', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('coupon_id')->index('coupon_manufacturer_coupon_id_index');
            $table->unsignedInteger('manufacturer_id')->index('coupon_manufacturer_manufacturer_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon_manufacturer');
    }
}
