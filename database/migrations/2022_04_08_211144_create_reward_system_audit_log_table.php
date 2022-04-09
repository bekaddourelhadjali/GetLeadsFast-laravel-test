<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardSystemAuditLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reward_system_audit_log', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('reward_system_user_credit_id')->index('reward_system_audit_log_reward_system_user_credit_id_index');
            $table->text('message');
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
        Schema::dropIfExists('reward_system_audit_log');
    }
}
