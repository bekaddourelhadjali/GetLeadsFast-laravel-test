<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password', 60);
            $table->rememberToken();
            $table->string('code', 60)->nullable();
            $table->string('ip_address')->nullable();
            $table->tinyInteger('active');
            $table->boolean('api_enabled')->default(0);
            $table->string('api_key')->nullable();
            $table->string('dropship_website')->nullable();
            $table->decimal('dropship_retail_discount', 10, 2)->default(50.00);
            $table->decimal('dropship_notification_threshold', 10, 2)->default(150.00);
            $table->boolean('dropship_notification_enabled')->default(1);
            $table->integer('dropship_payment_type')->default(6)->index('users_dropship_payment_type_index');
            $table->tinyInteger('deleted');
            $table->tinyInteger('admin');
            $table->boolean('super_admin')->default(0);
            $table->boolean('sales_person')->default(0);
            $table->timestamps();
            $table->unsignedInteger('customer_group_id')->default(1);
            $table->boolean('guest_user')->default(0);
            $table->enum('pos_role', ['customer', 'employee', 'store_manager'])->default('customer');
            $table->boolean('warehouse_user')->default(0);
            $table->boolean('user_credit_freeze')->default(0);
            $table->string('pos_pin', 60);
            $table->unsignedInteger('franchise_group_id')->index('users_franchise_group_id_index');
            $table->unsignedInteger('franchise_location_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
