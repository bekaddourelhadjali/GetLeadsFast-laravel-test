<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliateMainSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_main_sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('affiliate_id');
            $table->string('imagename');
            $table->string('url');
            $table->integer('position');
            $table->integer('show_image')->default(0);
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
        Schema::dropIfExists('affiliate_main_sliders');
    }
}
