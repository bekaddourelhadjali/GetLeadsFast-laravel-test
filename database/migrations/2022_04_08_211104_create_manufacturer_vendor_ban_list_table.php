<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturerVendorBanListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturer_vendor_ban_list', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('manufacturer_id')->index('manufacturer_vendor_ban_list_manufacturer_id_index');
            $table->unsignedInteger('vendor_id')->index('manufacturer_vendor_ban_list_vendor_id_index');
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
        Schema::dropIfExists('manufacturer_vendor_ban_list');
    }
}
