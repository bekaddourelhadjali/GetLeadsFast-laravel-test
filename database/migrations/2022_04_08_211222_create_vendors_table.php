<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store_id')->default(0);
            $table->string('name');
            $table->string('prefix')->nullable();
            $table->enum('feed_type', ['ftp', 'xml'])->default('ftp');
            $table->string('ftp_host')->nullable();
            $table->string('ftp_user')->nullable();
            $table->string('ftp_pass')->nullable();
            $table->string('xml_url')->nullable();
            $table->string('feed_image_source')->default('url');
            $table->string('feed_image_path')->default('/');
            $table->tinyInteger('active');
            $table->boolean('controlled_by_feed')->default(0);
            $table->tinyInteger('deleted');
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
        Schema::dropIfExists('vendors');
    }
}
