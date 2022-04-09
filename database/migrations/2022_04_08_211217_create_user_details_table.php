<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index('user_details_user_id_index');
            $table->string('shipping_first_name')->nullable();
            $table->string('shipping_last_name')->nullable();
            $table->string('shipping_company')->nullable();
            $table->string('shipping_home_phone')->nullable();
            $table->string('shipping_cell_phone')->nullable();
            $table->string('shipping_fax')->nullable();
            $table->string('shipping_address')->nullable();
            $table->string('shipping_address2')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_zip')->nullable();
            $table->integer('shipping_state')->nullable();
            $table->integer('shipping_country')->nullable();
            $table->string('billing_first_name')->nullable();
            $table->string('billing_last_name')->nullable();
            $table->string('billing_company')->nullable();
            $table->string('billing_phone')->nullable();
            $table->string('billing_fax')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_address2')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_zip')->nullable();
            $table->integer('billing_state')->nullable();
            $table->integer('billing_country')->nullable();
            $table->integer('store_location_id')->default(0);
            $table->text('cc_name')->nullable();
            $table->text('cc_number')->nullable();
            $table->text('cc_month')->nullable();
            $table->text('cc_year')->nullable();
            $table->text('cc_cvv')->nullable();
            $table->timestamps();
            $table->integer('status')->nullable();
            $table->string('processed_by')->nullable();
            $table->string('title')->nullable();
            $table->string('ein')->nullable();
            $table->string('website')->nullable();
            $table->string('where_did_you_hear_about_us')->nullable();
            $table->string('heard_about_us_from_other')->nullable();
            $table->integer('is_address_verified')->default(-1);
            $table->integer('echeck_method')->nullable();
            $table->text('routing_number')->nullable();
            $table->text('account_number')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('bank_name')->nullable();
            $table->text('memo')->nullable();
            $table->string('subscription_shipping_method')->nullable();
            $table->integer('subscription_payment_method')->default(4);
            $table->float('lng', 10, 6)->nullable();
            $table->float('lat', 10, 6)->nullable();
            $table->integer('geo_processed')->nullable();
            $table->boolean('salesman')->default(0);
            $table->string('business_name')->nullable();
            $table->string('store_name');
            $table->tinyInteger('billing_same_as_shipping')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
