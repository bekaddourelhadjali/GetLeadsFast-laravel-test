<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliateCommissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_commission', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('order_id');
            $table->dateTime('order_date');
            $table->integer('user_id');
            $table->string('user');
            $table->string('user_email');
            $table->decimal('order_amount', 10, 2);
            $table->integer('user_commission_id');
            $table->string('user_commission');
            $table->string('user_commission_email');
            $table->decimal('commission', 5, 2);
            $table->decimal('commission_amount', 5, 2);
            $table->boolean('proccessed')->default(0);
            $table->timestamps();
            $table->text('source')->nullable();
            $table->boolean('wholesale_commission')->default(0);
            $table->boolean('deduct_7')->default(0);
            $table->boolean('deduct_2')->default(0);
            $table->boolean('voided')->default(0);
            $table->decimal('order_retail_amount', 15, 4)->nullable();
            $table->boolean('retail_price_used')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affiliate_commission');
    }
}
