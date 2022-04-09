<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_number')->nullable();
            $table->unsignedInteger('user_id')->index('orders_user_id_index');
            $table->unsignedInteger('store_id')->index('orders_store_id_index');
            $table->unsignedInteger('payment_method_id')->default(0)->index('orders_payment_method_id_index');
            $table->decimal('subtotal', 18, 4)->default(0.0000);
            $table->decimal('applied_credit', 18, 4)->default(0.0000);
            $table->decimal('total_amount', 10, 2);
            $table->decimal('total_tax', 10, 4);
            $table->decimal('tax_rate', 18, 4)->default(0.0000);
            $table->decimal('controlled_shipping', 18, 4)->default(0.0000);
            $table->decimal('uncontrolled_shipping', 18, 4)->default(0.0000);
            $table->decimal('shipping', 5, 2);
            $table->decimal('total_additional_freight_charges', 8, 2)->default(0.00);
            $table->decimal('subtotal_before_discount', 18, 4)->default(0.0000);
            $table->string('name');
            $table->string('email');
            $table->text('shipping_address');
            $table->text('billing_address');
            $table->string('shipping_method')->nullable();
            $table->boolean('sent_to_ups')->default(0);
            $table->longText('ups_response')->nullable();
            $table->boolean('ups_void')->default(0);
            $table->text('cc_name')->nullable();
            $table->text('cc_number')->nullable();
            $table->text('cc_cvv')->nullable();
            $table->text('cc_expiration')->nullable();
            $table->string('payment_note')->nullable();
            $table->boolean('deleted')->default(0);
            $table->integer('archived')->default(0);
            $table->text('transaction_reference');
            $table->enum('status', ['pending', 'processing', 'shipped', 'partially_shipped', 'backorder', 'cancelled', 'pickup'])->nullable();
            $table->enum('payment_status', ['pending', 'authorized', 'paid', 'partially_refunded', 'refunded', 'voided', 'not_paid'])->nullable();
            $table->string('shipping_tracking_number')->nullable();
            $table->string('shipping_courier')->nullable();
            $table->dateTime('shipping_date')->nullable();
            $table->text('admin_comment')->nullable();
            $table->timestamps();
            $table->decimal('shipping_cost', 18, 4)->nullable();
            $table->decimal('missouri_sales_tax', 18, 4)->nullable();
            $table->boolean('sent_to_xps')->default(0);
            $table->boolean('yotpo_synced')->default(0);
            $table->integer('RoutingNumber')->nullable();
            $table->integer('AccountNumber')->nullable();
            $table->string('BankName')->nullable();
            $table->boolean('echeck_deemed_risky')->default(0);
            $table->unsignedInteger('checkdraft_id')->nullable()->index('orders_checkdraft_id_index');
            $table->unsignedTinyInteger('checkdraft_printed')->nullable()->index('orders_checkdraft_printed_index');
            $table->integer('user_group_id')->default(1);
            $table->tinyInteger('manual');
            $table->unsignedInteger('manual_user_id')->index('orders_manual_user_id_index');
            $table->unsignedInteger('packing_user_id')->default(0)->index('orders_packing_user_id_index');
            $table->float('weight', 8, 2)->default(0.00);
            $table->boolean('box')->default(0);
            $table->text('buyer_comment')->nullable();
            $table->binary('meta');
            $table->boolean('auto_order')->default(0);
            $table->string('remote_order_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
