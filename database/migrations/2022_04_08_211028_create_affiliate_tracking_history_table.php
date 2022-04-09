<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliateTrackingHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_tracking_history', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index('affiliate_tracking_history_user_id_index');
            $table->unsignedInteger('ref_id')->nullable()->index('affiliate_tracking_history_ref_id_index');
            $table->unsignedInteger('order_id')->index('affiliate_tracking_history_order_id_index');
            $table->decimal('sale_amount', 10, 6)->default(0.000000);
            $table->decimal('commision', 5, 2)->default(0.00);
            $table->decimal('affiliate_earnings', 10, 6)->default(0.000000);
            $table->decimal('ref_commision', 5, 2);
            $table->decimal('ref_earnings', 10, 6)->default(0.000000);
            $table->enum('source', ['link', 'coupon', 'store', 'wholesale']);
            $table->unsignedInteger('source_id')->nullable()->index('affiliate_tracking_history_source_id_index');
            $table->string('source_name');
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
        Schema::dropIfExists('affiliate_tracking_history');
    }
}
