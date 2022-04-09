<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('link');
            $table->string('alt');
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->integer('position_top')->default(0);
            $table->integer('position_middle')->default(0);
            $table->integer('position_side')->default(0);
            $table->integer('position_left')->default(0);
            $table->integer('position_right')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
