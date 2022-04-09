<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrlRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('url_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entity_id')->nullable()->index('url_records_entity_id_index');
            $table->string('entity_name')->index('url_records_entity_name_index');
            $table->string('slug')->index('url_records_slug_index');
            $table->boolean('active')->default(1);
            $table->boolean('is_primary')->default(1);
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
        Schema::dropIfExists('url_records');
    }
}
