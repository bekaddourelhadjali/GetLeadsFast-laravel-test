<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->boolean('free_shipping')->default(0);
            $table->boolean('first_time_buyer')->default(0);
            $table->boolean('use_percentage')->default(0);
            $table->decimal('discount_amount', 15, 4)->default(0.0000);
            $table->tinyInteger('add_products_to_cart');
            $table->unsignedInteger('limit_per_user')->default(0);
            $table->unsignedInteger('limit_per_usage')->default(0);
            $table->boolean('deleted')->default(0);
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('coupons');
    }
}
