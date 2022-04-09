<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOptionSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_option_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id')->index('product_option_settings_product_id_index');
            $table->unsignedInteger('option_id')->index('product_option_settings_option_id_index');
            $table->boolean('control_type')->default(1);
            $table->string('text_prompt')->nullable();
            $table->boolean('is_required')->default(0);
            $table->integer('display_order')->default(0);
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
        Schema::dropIfExists('product_option_settings');
    }
}
