<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_log', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable()->index('activity_log_user_id_index');
            $table->nullableMorphs('log_object');
            $table->string('action')->index('activity_log_action_index');
            $table->text('details');
            $table->string('ip');
            $table->string('user_agent')->nullable();
            $table->timestamps();
            
            $table->index(['log_object_id'], 'activity_log_log_object_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_log');
    }
}
