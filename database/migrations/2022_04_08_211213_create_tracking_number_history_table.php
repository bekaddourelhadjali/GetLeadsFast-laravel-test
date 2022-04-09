<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingNumberHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking_number_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tracking_number')->nullable();
            $table->integer('order_id')->nullable()->index('tracking_number_history_order_id_index');
            $table->string('order_number')->nullable()->index('tracking_number_history_order_number_index');
            $table->integer('order_item_id')->nullable()->index('tracking_number_history_order_item_id_index');
            $table->string('carrier')->nullable();
            $table->text('carrier_response')->nullable();
            $table->boolean('void')->default(0);
            $table->string('method')->nullable();
            $table->integer('packed_quantity')->default(0);
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
        Schema::dropIfExists('tracking_number_history');
    }
}
