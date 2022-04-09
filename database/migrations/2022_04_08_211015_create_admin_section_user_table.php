<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminSectionUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_section_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index('admin_section_user_user_id_index');
            $table->unsignedInteger('admin_section')->index('admin_section_user_admin_section_index');
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
        Schema::dropIfExists('admin_section_user');
    }
}
