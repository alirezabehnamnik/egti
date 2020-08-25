<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('settings')->insert(
        [
         'navbar_item' => '[{"text":"خانه","link":"#","icon":"fas fa-home"},{"text":"بازی ها","link":"games","icon":"fas fa-gamepad"},{"text":"مسابقات","link":"tournament","icon":"fas fa-clipboard-list"}]',
         'slider' => '[{"image":"slide1.jpg","title":"First Slide","text":"First Slide"},{"image":"slide2.jpg","title":"Second Slide","text":"Second Slide"},{"image":"slide3.jpg","title":"Third Slide","text":"Third Slide"}]',
         'showSponsers' => 1,
         'showPartners' => 1,
         'social_networks' => '[{"icon":"instagram-icon.png","title":"Instagram","link":"#"},{"icon":"telegram-icon.png","title":"Telegram","link":"#"},{"icon":"youtube-icon.png","title":"YouTube","link":"#"}]',
         'email' => 'info@e-gaming.ir',
         'friends_footer' => '[{"text":"لینک 1","link":"#"},{"text":"لینک 2","link":"#"},{"text":"لینک 3","link":"#"},{"text":"لینک 4","link":"#"}]',
         'link_footer' => '[{"text":"لینک 1","link":"#"},{"text":"لینک 2","link":"#"},{"text":"لینک 3","link":"#"},{"text":"لینک 4","link":"#"}]',
         'learning_footer' => '[{"text":"لینک 1","link":"#"},{"text":"لینک 2","link":"#"},{"text":"لینک 3","link":"#"},{"text":"لینک 4","link":"#"}]'
       ]);
    }
}
