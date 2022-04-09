<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropshipOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dropship_order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('dropship_order_id')->index('dropship_order_items_dropship_order_id_index');
            $table->string('name')->default('');
            $table->unsignedInteger('qty');
            $table->decimal('price', 16, 4)->default(0.0000);
            $table->string('options')->default('');
            $table->string('barcode')->index('dropship_order_items_barcode_index');
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
        Schema::dropIfExists('dropship_order_items');
    }
}
