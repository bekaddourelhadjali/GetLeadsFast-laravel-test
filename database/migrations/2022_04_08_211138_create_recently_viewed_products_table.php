<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecentlyViewedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recently_viewed_products', function (Blueprint $table) {
            $table->unsignedInteger('product_id')->index('recently_viewed_products_product_id_index');
            $table->unsignedInteger('user_id')->index('recently_viewed_products_user_id_index');
            $table->unsignedInteger('store_id')->default(1)->index('recently_viewed_products_store_id_index');
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
        Schema::dropIfExists('recently_viewed_products');
    }
}
