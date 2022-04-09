<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vendor_id')->index('vendor_products_vendor_id_index');
            $table->string('gtin')->nullable()->index('vendor_products_gtin_index');
            $table->string('sku')->nullable()->index('vendor_products_sku_index');
            $table->string('mpn')->nullable();
            $table->string('weight')->default('0');
            $table->integer('inventory')->default(0);
            $table->decimal('cost', 18, 4)->default(0.0000);
            $table->decimal('price', 18, 4)->default(0.0000);
            $table->boolean('nav')->default(0);
            $table->boolean('lemil')->default(0);
            $table->unsignedTinyInteger('used')->default(0)->index('vendor_products_used_index');
            $table->boolean('deleted')->default(0);
            $table->text('short_description')->nullable();
            $table->mediumText('long_description')->nullable();
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
        Schema::dropIfExists('vendor_products');
    }
}
