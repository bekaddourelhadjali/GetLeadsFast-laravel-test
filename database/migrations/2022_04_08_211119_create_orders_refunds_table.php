<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersRefundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_refunds', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id')->index('orders_refunds_order_id_index');
            $table->decimal('order_total_amount_before', 10, 2);
            $table->decimal('order_total_amount_after', 10, 2);
            $table->decimal('refund_amount', 10, 2);
            $table->string('payment_note')->nullable();
            $table->unsignedInteger('user_id')->index('orders_refunds_user_id_index');
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
        Schema::dropIfExists('orders_refunds');
    }
}
