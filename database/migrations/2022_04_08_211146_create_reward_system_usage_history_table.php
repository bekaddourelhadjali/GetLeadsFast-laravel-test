<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardSystemUsageHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reward_system_usage_history', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('reward_system_user_credit_id')->index('reward_system_usage_history_reward_system_user_credit_id_index');
            $table->unsignedInteger('order_id')->index('reward_system_usage_history_order_id_index');
            $table->decimal('amount', 18, 4);
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
        Schema::dropIfExists('reward_system_usage_history');
    }
}
