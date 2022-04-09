<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id')->index('product_packages_product_id_index');
            $table->string('package_name')->nullable();
            $table->decimal('weight', 18, 4)->default(0.0000);
            $table->decimal('length', 18, 4)->default(0.0000);
            $table->decimal('width', 18, 4)->default(0.0000);
            $table->decimal('height', 18, 4)->default(0.0000);
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
        Schema::dropIfExists('product_packages');
    }
}
