<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountManufacturerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount_manufacturer', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('discount_id')->index('discount_manufacturer_discount_id_index');
            $table->unsignedInteger('manufacturer_id')->index('discount_manufacturer_manufacturer_id_index');
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
        Schema::dropIfExists('discount_manufacturer');
    }
}
