<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorProductForceListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_product_force_list', function (Blueprint $table) {
            $table->unsignedInteger('vendor_id')->index('vendor_product_force_list_vendor_id_index');
            $table->unsignedInteger('product_id')->index('vendor_product_force_list_product_id_index');
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
        Schema::dropIfExists('vendor_product_force_list');
    }
}
