<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardSystemUserCreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reward_system_user_credit', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index('reward_system_user_credit_user_id_index');
            $table->unsignedInteger('order_id')->index('reward_system_user_credit_order_id_index');
            $table->unsignedInteger('store_id')->index('reward_system_user_credit_store_id_index');
            $table->decimal('credit', 18, 4)->default(0.0000);
            $table->decimal('balance', 18, 4)->default(0.0000);
            $table->dateTime('exp_date');
            $table->boolean('active')->default(0)->index('reward_system_user_credit_active_index');
            $table->text('admin_comment')->nullable();
            $table->timestamps();
            $table->enum('method', ['cash', 'credit card', 'check', 'freecredit', 'store credit', 'commission', 'other'])->nullable();
            $table->string('transaction_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reward_system_user_credit');
    }
}
