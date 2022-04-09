<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemAdditionalFreightChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item_additional_freight_charges', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_item_id')->index('order_item_additional_freight_charges_order_item_id_index');
            $table->string('freight_name')->nullable();
            $table->decimal('freight_value', 10, 4)->default(0.0000);
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
        Schema::dropIfExists('order_item_additional_freight_charges');
    }
}
