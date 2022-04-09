<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompassionateCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compassionate_cares', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->text('description');
            $table->string('doctor_first_name');
            $table->string('doctor_last_name');
            $table->string('doctor_street_address');
            $table->string('doctor_address_line_2')->nullable();
            $table->string('doctor_city');
            $table->string('doctor_zip');
            $table->integer('doctor_country');
            $table->integer('doctor_state');
            $table->text('additional_comments')->nullable();
            $table->integer('store');
            $table->integer('status')->default(0);
            $table->string('processed_by')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id', 'compassionate_cares_user_id_foreign')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compassionate_cares');
    }
}
