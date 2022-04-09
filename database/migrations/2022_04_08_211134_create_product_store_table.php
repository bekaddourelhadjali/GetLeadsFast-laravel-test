<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_store', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('store_id')->index('product_store_store_id_index');
            $table->unsignedInteger('product_id')->index('product_store_product_id_index');
            $table->boolean('hide_regular')->default(0);
            $table->boolean('hide_guest')->default(0);
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
        Schema::dropIfExists('product_store');
    }
}
