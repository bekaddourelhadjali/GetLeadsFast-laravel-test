<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountUsageHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount_usage_history', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id')->index('discount_usage_history_order_id_index');
            $table->unsignedInteger('discount_id')->index('discount_usage_history_discount_id_index');
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
        Schema::dropIfExists('discount_usage_history');
    }
}
