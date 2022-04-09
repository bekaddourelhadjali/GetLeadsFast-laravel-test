<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliateCommissionPercentagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_commission_percentages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index('affiliate_commission_percentages_user_id_index');
            $table->unsignedInteger('belongs_to')->index('affiliate_commission_percentages_belongs_to_index');
            $table->unsignedInteger('commission_percentage')->index('affiliate_commission_percentages_commission_percentage_index');
            $table->unsignedInteger('added_by')->index('affiliate_commission_percentages_added_by_index');
            $table->unsignedInteger('level')->default(1);
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('affiliate_commission_percentages');
    }
}
