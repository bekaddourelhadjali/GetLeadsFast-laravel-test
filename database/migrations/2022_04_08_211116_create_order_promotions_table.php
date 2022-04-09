<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->default(0);
            $table->float('threshold', 8, 2)->default(0.00)->index('order_promotions_threshold_index');
            $table->boolean('active')->default(0)->index('order_promotions_active_index');
            $table->integer('limit')->default(0);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_promotions');
    }
}
