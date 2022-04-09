<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentMethodStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_method_store', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('payment_method_id')->index('payment_method_store_payment_method_id_index');
            $table->unsignedInteger('store_id')->index('payment_method_store_store_id_index');
            $table->timestamps();
            $table->string('api_id')->nullable();
            $table->string('api_key')->nullable();
            $table->string('test_api_id')->nullable();
            $table->string('test_api_key')->nullable();
            $table->string('merchant')->nullable();
            $table->string('location_id')->nullable();
            $table->string('test_location_id')->nullable();
            $table->dateTime('start_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_method_store');
    }
}
