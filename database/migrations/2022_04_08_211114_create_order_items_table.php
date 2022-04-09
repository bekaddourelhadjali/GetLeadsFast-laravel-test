<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id')->index('order_items_order_id_index');
            $table->unsignedInteger('vendor_id')->nullable()->index('order_items_vendor_id_index');
            $table->string('sku')->nullable();
            $table->decimal('unit_price_w_tax', 18, 4)->default(0.0000);
            $table->decimal('unit_price_wo_tax', 18, 4)->default(0.0000);
            $table->decimal('price_w_tax', 18, 4)->default(0.0000);
            $table->decimal('price_wo_tax', 18, 4)->default(0.0000);
            $table->decimal('product_cost', 18, 4)->default(0.0000);
            $table->decimal('item_weight', 18, 4)->default(0.0000);
            $table->string('shipping_method')->nullable();
            $table->string('shipping_note')->nullable();
            $table->decimal('shipping_fee', 18, 4)->nullable();
            $table->decimal('additional_freight_charges', 10, 4)->default(0.0000);
            $table->unsignedInteger('product_id')->index('order_items_product_id_index');
            $table->unsignedInteger('product_parent_id')->nullable()->index('order_items_product_parent_id_index');
            $table->string('title');
            $table->integer('quantity');
            $table->text('options')->nullable();
            $table->text('options_meta');
            $table->string('image');
            $table->text('admin_comment')->nullable();
            $table->text('packing_note')->nullable();
            $table->boolean('packed')->default(0);
            $table->integer('packed_quantity')->default(0);
            $table->boolean('pickup')->default(0);
            $table->boolean('coupon_applied')->default(0);
            $table->timestamps();
            $table->unsignedInteger('custom_product_id')->nullable()->index('order_items_custom_product_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
