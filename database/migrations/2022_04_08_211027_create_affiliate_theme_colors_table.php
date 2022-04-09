<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliateThemeColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_theme_colors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index('affiliate_theme_colors_user_id_index');
            $table->string('body_text_color')->nullable();
            $table->string('body_link_color')->nullable();
            $table->string('body_link_hover_color')->nullable();
            $table->string('body_h1')->nullable();
            $table->string('body_h2')->nullable();
            $table->string('body_h3')->nullable();
            $table->string('header_bg_color')->nullable();
            $table->string('header_font_color')->nullable();
            $table->string('header_link_color')->nullable();
            $table->string('header_link_hover_color')->nullable();
            $table->string('footer_bg_color')->nullable();
            $table->string('footer_font_color')->nullable();
            $table->string('footer_link_color')->nullable();
            $table->string('footer_link_hover')->nullable();
            $table->string('footer_h3')->nullable();
            $table->binary('custom_css')->nullable();
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
        Schema::dropIfExists('affiliate_theme_colors');
    }
}
