<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_conditions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('coupon_id')->index('coupon_conditions_coupon_id_index');
            $table->string('operator')->default('');
            $table->decimal('amount', 15, 4)->default(0.0000);
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
        Schema::dropIfExists('coupon_conditions');
    }
}
