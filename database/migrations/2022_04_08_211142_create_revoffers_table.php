<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevoffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revoffers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_ip')->nullable();
            $table->string('email_address')->nullable();
            $table->string('affiliate_id')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('session_id')->nullable();
            $table->unsignedInteger('order_id')->index('revoffers_order_id_index');
            $table->timestamps();
            $table->decimal('amount', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revoffers');
    }
}
