<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionValueProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_value_product', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('option_value_id')->index('option_value_product_option_value_id_index');
            $table->unsignedInteger('product_id')->index('option_value_product_product_id_index');
            $table->enum('price_operator', ['+', '-']);
            $table->decimal('price_change', 10, 2);
            $table->enum('weight_operator', ['+', '-'])->default('+');
            $table->decimal('weight_change', 10, 2)->default(0.00);
            $table->boolean('is_preselected')->default(0);
            $table->boolean('disabled')->default(0);
            $table->string('gtin_override')->nullable()->index('option_value_product_gtin_override_index');
            $table->integer('quantity')->default(0)->index('option_value_product_quantity_index');
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
        Schema::dropIfExists('option_value_product');
    }
}
