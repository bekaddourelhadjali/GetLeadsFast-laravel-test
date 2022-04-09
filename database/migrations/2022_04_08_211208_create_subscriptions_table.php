<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('store_id')->index('subscriptions_store_id_index');
            $table->unsignedInteger('product_id')->index('subscriptions_product_id_index');
            $table->unsignedInteger('user_id')->index('subscriptions_user_id_index');
            $table->integer('option_value_id')->nullable();
            $table->integer('quantity');
            $table->integer('auto_delivery');
            $table->date('last_auto_delivery')->nullable();
            $table->double('discount');
            $table->timestamps();
            $table->integer('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
