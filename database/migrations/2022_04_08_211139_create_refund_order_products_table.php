<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund_order_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('refund_order_id')->index('refund_order_products_refund_order_id_foreign');
            $table->unsignedInteger('order_item_id')->index('refund_order_products_order_item_id_foreign');
            $table->integer('quantity')->default(1);
            $table->enum('reason', ['broken', 'damaged', 'defective', 'dissatisfied'])->default('Broken');
            $table->text('note')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->enum('request_for', ['return', 'exchange', 'store credit'])->default('Return');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refund_order_products');
    }
}
