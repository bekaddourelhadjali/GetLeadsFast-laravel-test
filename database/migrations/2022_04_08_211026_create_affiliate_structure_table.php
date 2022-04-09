<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliateStructureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_structure', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index('affiliate_structure_user_id_index');
            $table->unsignedInteger('belongs_to')->nullable()->index('affiliate_structure_belongs_to_index');
            $table->timestamps();
            $table->integer('secondary_store')->default(0);
            $table->boolean('skip_slc')->default(0);
            $table->integer('added_by')->default(0);
            $table->boolean('legacy')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affiliate_structure');
    }
}
