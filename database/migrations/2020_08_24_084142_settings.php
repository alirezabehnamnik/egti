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
          $table->id();
          // Navbar
          $table->longText('navbar_item'); // [{"text":"خانه","link":"#","icon":"fas fa-home"}]
          // Slider
          $table->longText('slider'); // [{"image":"slide2.jpg","title":"Second Slide","text":"Second Slide"},{"image":"slide1.jpg","title":"First Slide","text":"First Slide"}]
          // Home page
          $table->unsignedBigInteger('showSponsers')->default(1);
          $table->unsignedBigInteger('showPartners')->default(1);
          // Footer
          $table->longText('social_networks'); // [{"icon":"instagram.png","title":"Instagram","link":"https://instagram.com/egaming_ir"}]
          $table->string('email');
          $table->longText('about');
          $table->longText('work_time');
          $table->string('phone');
          $table->longText('friends_footer'); // [{"text":"لینک 1","link":"#"}]
          $table->longText('link_footer'); // [{"text":"لینک 1","link":"#"}]
          $table->longText('learning_footer'); // [{"text":"لینک 1","link":"#"}]
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
