<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('enabled')->default(1);
            $table->decimal('min_amount', 18, 4)->nullable();
            $table->unsignedInteger('discount')->nullable();
            $table->timestamps();
            $table->boolean('coupons')->default(1);
            $table->boolean('wholesale')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_groups');
    }
}
