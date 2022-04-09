<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderSplitPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_split_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id')->nullable()->index('order_split_payments_order_id_index');
            $table->unsignedInteger('payment_method_id')->nullable()->index('order_split_payments_payment_method_id_index');
            $table->decimal('amount', 10, 2)->nullable();
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
        Schema::dropIfExists('order_split_payments');
    }
}
