<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecificationItemProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specification_item_product', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('specification_item_id')->index('specification_item_product_specification_item_id_index');
            $table->unsignedInteger('product_id')->index('specification_item_product_product_id_index');
            $table->string('value')->default('');
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
        Schema::dropIfExists('specification_item_product');
    }
}
