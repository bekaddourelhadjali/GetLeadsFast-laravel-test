<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStateTaxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state_tax', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('state_id')->index('state_tax_state_id_index');
            $table->unsignedInteger('tax_id')->index('state_tax_tax_id_index');
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
        Schema::dropIfExists('state_tax');
    }
}
