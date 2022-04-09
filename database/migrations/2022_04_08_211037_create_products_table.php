<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('yotpo_id')->nullable()->index('products_yotpo_id_index');
            $table->unsignedInteger('manufacturer_id')->nullable()->index('products_manufacturer_id_index');
            $table->string('gtin')->nullable()->index('products_gtin_index');
            $table->string('sku')->nullable()->index('products_sku_index');
            $table->string('mpn')->nullable();
            $table->boolean('master')->default(0)->index('products_master_index');
            $table->boolean('new_insert')->default(0)->index('products_new_insert_index');
            $table->integer('product_type')->nullable()->index('products_product_type_index');
            $table->integer('vendor_id')->nullable()->index('products_vendor_id_index');
            $table->integer('store_id')->default(0)->index('products_store_id_index');
            $table->boolean('nav')->default(0)->index('products_nav_index');
            $table->boolean('lemil')->default(0)->index('products_lemil_index');
            $table->boolean('package')->default(0)->index('products_package_index');
            $table->boolean('used')->default(0)->index('products_used_index');
            $table->boolean('free_shipping')->default(0)->index('products_free_shipping_index');
            $table->string('name');
            $table->mediumText('short_description')->nullable();
            $table->longText('full_description')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->string('tax_info')->nullable();
            $table->string('ingredients')->nullable();
            $table->string('usage')->nullable();
            $table->string('strength')->nullable();
            $table->string('product_weight')->nullable();
            $table->string('serving_per_container')->nullable();
            $table->string('serving_size')->nullable();
            $table->string('size')->nullable();
            $table->string('features')->nullable();
            $table->string('box_set_includes')->nullable();
            $table->string('container')->nullable();
            $table->string('flavors')->nullable();
            $table->boolean('made_in_usa')->default(1);
            $table->boolean('force_msrp')->default(0);
            $table->tinyInteger('call_for_price');
            $table->text('call_for_price_message')->nullable();
            $table->decimal('msrp', 18, 4)->default(0.0000);
            $table->decimal('price', 18, 4)->default(0.0000)->index('products_price_index');
            $table->decimal('old_price', 18, 4)->default(0.0000);
            $table->decimal('product_cost', 18, 4)->default(0.0000);
            $table->decimal('special_price', 18, 4)->default(0.0000);
            $table->dateTime('special_price_start_date');
            $table->dateTime('special_price_end_date');
            $table->decimal('map_high', 18, 4)->default(0.0000);
            $table->decimal('map_low', 18, 4)->default(0.0000);
            $table->integer('stock_quantity')->default(0);
            $table->integer('inbound_stock_quantity')->default(0);
            $table->string('in_stock_message')->nullable();
            $table->string('out_of_stock_message')->nullable();
            $table->string('inbound_user')->nullable();
            $table->decimal('weight', 18, 4)->default(0.0000);
            $table->decimal('length', 18, 4)->default(0.0000);
            $table->decimal('width', 18, 4)->default(0.0000);
            $table->decimal('height', 18, 4)->default(0.0000);
            $table->text('meta_keywords')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->dateTime('inventory_update')->nullable();
            $table->boolean('hide_from_guests')->default(0)->index('products_hide_from_guests_index');
            $table->boolean('published')->default(1)->index('products_published_index');
            $table->integer('published_by')->nullable()->index('products_published_by_index');
            $table->dateTime('publish_date')->nullable();
            $table->boolean('deleted')->default(0)->index('products_deleted_index');
            $table->string('deleted_by')->nullable();
            $table->dateTime('deleted_on')->nullable();
            $table->integer('hits')->default(0);
            $table->boolean('boost_in_search')->default(0);
            $table->timestamps();
            $table->decimal('wholesale_price', 18, 4)->nullable();
            $table->string('legal_name')->nullable();
            $table->boolean('show_only_to_franchise')->default(0)->index('products_show_only_to_franchise_index');
            $table->unsignedInteger('duplicated_from_id')->nullable()->index('products_duplicated_from_id_index');
            $table->integer('is_thc_free')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
