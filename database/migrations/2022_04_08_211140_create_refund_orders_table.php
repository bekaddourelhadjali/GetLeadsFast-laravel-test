<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id')->index('refund_orders_order_id_foreign');
            $table->text('note')->nullable();
            $table->integer('status')->default(0);
            $table->boolean('sent_to_ups')->default(0);
            $table->longText('ups_response')->nullable();
            $table->string('tracking_number')->nullable();
            $table->timestamps();
            $table->string('processed_by')->nullable();
            $table->string('disposition')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refund_orders');
    }
}
