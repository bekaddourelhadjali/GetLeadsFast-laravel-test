<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_subscription', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('store_id')->index('stock_subscription_store_id_index');
            $table->unsignedInteger('user_id')->index('stock_subscription_user_id_index');
            $table->unsignedInteger('product_id')->index('stock_subscription_product_id_index');
            $table->boolean('notified')->default(0);
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
        Schema::dropIfExists('stock_subscription');
    }
}
