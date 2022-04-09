<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionChangeLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_change_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('owner_id')->index('subscription_change_logs_owner_id_index');
            $table->unsignedInteger('user_id')->index('subscription_change_logs_user_id_index');
            $table->string('product')->nullable();
            $table->string('type');
            $table->string('old_value')->nullable();
            $table->string('new_value')->nullable();
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
        Schema::dropIfExists('subscription_change_logs');
    }
}
