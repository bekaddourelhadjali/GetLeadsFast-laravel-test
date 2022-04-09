<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropshipOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dropship_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_number')->nullable();
            $table->unsignedInteger('user_id')->index('dropship_orders_user_id_index');
            $table->decimal('subtotal', 18, 4)->default(0.0000);
            $table->decimal('total_amount', 10, 2);
            $table->decimal('tax', 10, 4)->default(0.0000);
            $table->decimal('discount', 10, 4)->default(0.0000);
            $table->decimal('shipping', 5, 2)->default(0.00);
            $table->text('shipping_address');
            $table->string('shipping_method')->nullable();
            $table->integer('payment_method_id')->nullable();
            $table->string('payment_note')->nullable();
            $table->enum('status', ['pending', 'processing', 'shipped', 'cancelled']);
            $table->enum('payment_status', ['pending', 'authorized', 'paid', 'partially_refunded', 'refunded', 'voided']);
            $table->string('shipping_tracking_number')->nullable();
            $table->string('coupon')->nullable();
            $table->string('shipping_courier')->nullable();
            $table->dateTime('shipping_date')->nullable();
            $table->boolean('sent_to_xps')->default(0);
            $table->boolean('deleted')->default(0);
            $table->timestamps();
            $table->text('user_meta')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dropship_orders');
    }
}
