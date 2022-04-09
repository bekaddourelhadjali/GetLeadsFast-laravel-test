<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('order_email')->nullable();
            $table->string('smtp_username')->nullable();
            $table->string('smtp_password')->nullable();
            $table->string('primary_url')->nullable();
            $table->text('hosts')->nullable();
            $table->string('phone')->default('');
            $table->string('facebook')->default('');
            $table->string('twitter')->default('');
            $table->string('mailchimp_api_key')->default('');
            $table->boolean('ssl_enabled')->default(0);
            $table->string('store_prefix')->nullable();
            $table->boolean('maintenance')->default(0);
            $table->string('check_draft_name')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('hardware_id')->nullable();
            $table->string('seo_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->longText('footer_code')->nullable();
            $table->longText('header_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
