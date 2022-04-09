<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('picture_id')->nullable()->index('manufacturers_picture_id_index');
            $table->integer('store_id')->nullable()->index('manufacturers_store_id_index');
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('description_published')->default(1);
            $table->text('in_stock_message')->nullable();
            $table->text('out_of_stock_message')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->boolean('force_msrp')->default(0);
            $table->tinyInteger('call_for_price');
            $table->text('call_for_price_message')->nullable();
            $table->boolean('published')->default(1);
            $table->boolean('deleted')->default(0);
            $table->boolean('display_order')->default(0);
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
        Schema::dropIfExists('manufacturers');
    }
}
