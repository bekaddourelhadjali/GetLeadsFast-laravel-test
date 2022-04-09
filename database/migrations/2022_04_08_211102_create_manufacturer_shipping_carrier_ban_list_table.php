<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturerShippingCarrierBanListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturer_shipping_carrier_ban_list', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('manufacturer_id')->index('manufacturer_shipping_carrier_ban_list_manufacturer_id_index');
            $table->unsignedInteger('shipping_carrier_id')->index('manufacturer_shipping_carrier_ban_list_shipping_carrier_id_index');
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
        Schema::dropIfExists('manufacturer_shipping_carrier_ban_list');
    }
}
