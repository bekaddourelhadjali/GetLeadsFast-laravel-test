<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturerStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturer_store', function (Blueprint $table) {
            $table->unsignedInteger('manufacturer_id')->index('manufacturer_store_manufacturer_id_index');
            $table->unsignedInteger('store_id')->index('manufacturer_store_store_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manufacturer_store');
    }
}
