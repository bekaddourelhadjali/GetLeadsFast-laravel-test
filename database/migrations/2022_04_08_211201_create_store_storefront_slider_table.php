<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreStorefrontSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_storefront_slider', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('store_id')->index('store_storefront_slider_store_id_index');
            $table->unsignedInteger('storefront_slider_id')->index('store_storefront_slider_storefront_slider_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_storefront_slider');
    }
}
