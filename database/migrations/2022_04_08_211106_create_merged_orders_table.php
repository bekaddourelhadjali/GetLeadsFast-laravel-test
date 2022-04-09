<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMergedOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merged_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('source_order_id')->nullable()->index('merged_orders_source_order_id_index');
            $table->integer('target_order_id')->nullable()->index('merged_orders_target_order_id_index');
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
        Schema::dropIfExists('merged_orders');
    }
}
