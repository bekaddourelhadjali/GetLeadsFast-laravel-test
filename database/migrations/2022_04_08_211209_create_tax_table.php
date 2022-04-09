<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tax_name');
            $table->string('tax_description');
            $table->decimal('tax_rate', 10, 4);
            $table->enum('type', ['percent', 'fixed']);
            $table->tinyInteger('default');
            $table->timestamps();
            $table->unsignedInteger('store_id')->index('tax_store_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tax');
    }
}
