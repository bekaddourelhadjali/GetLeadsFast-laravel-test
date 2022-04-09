<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store_id')->default(0)->index('store_locations_store_id_index');
            $table->string('name');
            $table->string('short_description')->nullable();
            $table->string('store_number', 100)->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('phone');
            $table->string('image');
            $table->float('lng', 10, 6);
            $table->float('lat', 10, 6);
            $table->string('working_hours', 100);
            $table->timestamps();
            $table->enum('status', ['active', 'inactive', 'pending', 'under_construction', 'deleted'])->default('active');
            $table->boolean('deleted')->default(0);
            $table->string('order_email')->nullable();
            $table->integer('verified')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_locations');
    }
}
