<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailQueueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_queue', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store_id')->nullable()->index('email_queue_store_id_index');
            $table->integer('id_from')->nullable()->index('email_queue_id_from_index');
            $table->string('name_from');
            $table->string('email_from');
            $table->unsignedInteger('id_to')->index('email_queue_id_to_index');
            $table->string('name_to');
            $table->string('email_to');
            $table->string('subject');
            $table->mediumText('message');
            $table->enum('status', ['pending', 'sending', 'sent']);
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
        Schema::dropIfExists('email_queue');
    }
}
