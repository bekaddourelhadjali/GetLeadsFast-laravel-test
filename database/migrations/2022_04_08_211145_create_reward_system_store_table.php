<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardSystemStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reward_system_store', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('reward_system_id')->index('reward_system_store_reward_system_id_index');
            $table->unsignedInteger('store_id')->index('reward_system_store_store_id_index');
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
        Schema::dropIfExists('reward_system_store');
    }
}
