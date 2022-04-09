<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompassionateCaresFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compassionate_cares_files', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('compassionate_care_id')->index('compassionate_cares_files_compassionate_care_id_index');
            $table->string('real_path');
            $table->string('mime_type');
            $table->string('original_name');
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
        Schema::dropIfExists('compassionate_cares_files');
    }
}
