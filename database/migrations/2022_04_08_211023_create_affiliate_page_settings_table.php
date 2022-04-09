<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliatePageSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_page_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('store_name')->nullable();
            $table->string('phone');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('google')->nullable();
            $table->boolean('referred_bar')->default(1);
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->timestamps();
            $table->string('city')->nullable();
            $table->integer('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('store_logo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affiliate_page_settings');
    }
}
