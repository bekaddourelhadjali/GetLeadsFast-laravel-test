<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoteRequestItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_request_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('quote_request_id')->index('quote_request_items_quote_request_id_index');
            $table->string('sku_cas_number')->default('');
            $table->string('description')->default('');
            $table->string('size')->default('');
            $table->string('qty')->default('');
            $table->string('target_price')->default('');
            $table->string('current_supplier')->default('');
            $table->string('current_supplier_cat_num')->default('');
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
        Schema::dropIfExists('quote_request_items');
    }
}
