<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Settings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('settings', function (Blueprint $table) {
          // Navbar
          $table->string('navbar-items'); // [{"text":"خانه","icon":"fas fa-home","link":"home"}]
          // Slider
          $table->string('slider'); // [{"image":"slide2.jpg","title":"Second Slide","text":"Second Slide"},{"image":"slide1.jpg","title":"First Slide","text":"First Slide"}]
          // Home page
          $table->unsignedBigInteger('showSponsers')->default(1);
          $table->unsignedBigInteger('showPartners')->default(1);
          // Footer
          $table->string('social-networks'); // [{"icon":"instagram.png","title":"Instagram","link":"https://instagram.com/egaming_ir"}]
          $table->string('email');
          $table->string('freinds-footer'); // [{"text":"لینک 1","link":"#"}]
          $table->string('link-footer'); // [{"text":"لینک 1","link":"#"}]
          $table->string('learning-footer'); // [{"text":"لینک 1","link":"#"}]
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('settings');
    }
}
