<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedUpdateProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_update_progress', function (Blueprint $table) {
            $table->enum('type', ['daily', 'hourly'])->default('hourly');
            $table->enum('status', ['pending', 'running'])->default('pending');
            $table->dateTime('time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feed_update_progress');
    }
}
