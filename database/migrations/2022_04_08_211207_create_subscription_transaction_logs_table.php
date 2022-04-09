<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionTransactionLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_transaction_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index('subscription_transaction_logs_user_id_index');
            $table->integer('order_id')->nullable();
            $table->text('response_message')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('subscription_transaction_logs');
    }
}
