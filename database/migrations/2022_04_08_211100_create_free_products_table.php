<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_source_id')->nullable()->index('free_products_product_source_id_index');
            $table->unsignedInteger('product_id')->nullable()->index('free_products_product_id_index');
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
        Schema::dropIfExists('free_products');
    }
}
