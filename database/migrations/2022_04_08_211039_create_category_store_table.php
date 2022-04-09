<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_store', function (Blueprint $table) {
            $table->unsignedInteger('category_id')->index('category_store_category_id_index');
            $table->unsignedInteger('store_id')->index('category_store_store_id_index');
            $table->boolean('hide_from_guests')->default(0);
            $table->integer('display_order')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_store');
    }
}
