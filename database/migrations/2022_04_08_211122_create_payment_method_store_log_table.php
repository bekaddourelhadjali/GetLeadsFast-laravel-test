<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentMethodStoreLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_method_store_log', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payment_method_id')->nullable();
            $table->string('store_id')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('api_id')->nullable();
            $table->string('api_key')->nullable();
            $table->string('test_api_id')->nullable();
            $table->string('test_api_key')->nullable();
            $table->string('merchant')->nullable();
            $table->string('location_id')->nullable();
            $table->string('test_location_id')->nullable();
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
        Schema::dropIfExists('payment_method_store_log');
    }
}
