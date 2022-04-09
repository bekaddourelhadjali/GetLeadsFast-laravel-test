<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropshipOrderNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dropship_order_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('dropship_order_id')->index('dropship_order_notes_dropship_order_id_index');
            $table->unsignedInteger('user_id')->nullable()->index('dropship_order_notes_user_id_foreign');
            $table->text('note')->nullable();
            $table->boolean('public')->default(0);
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
        Schema::dropIfExists('dropship_order_notes');
    }
}
