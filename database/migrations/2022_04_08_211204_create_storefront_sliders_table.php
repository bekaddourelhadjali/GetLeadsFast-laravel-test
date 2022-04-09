<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorefrontSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storefront_sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->index('storefront_sliders_category_id_index');
            $table->boolean('visible_for_guests')->default(1);
            $table->boolean('position')->default(0);
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
        Schema::dropIfExists('storefront_sliders');
    }
}
