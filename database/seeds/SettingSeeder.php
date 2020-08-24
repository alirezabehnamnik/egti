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
         'navbar-items' => '[
            {"text":"خانه","icon":"fas fa-home","link":"home"},
            {"text":"بازی ها","icon":"fas fa-gamepad","link":"games"},
            {"text":"مسابقات","icon":"fas fa-clipboard-list","link":"tournaments"},
          ]',
         'slider' => '[
           {"image":"slide1.jpg","title":"First Slide","text":"First Slide"},
           {"image":"slide2.jpg","title":"Second Slide","text":"Second Slide"},
           {"image":"slide3.jpg","title":"Third Slide","text":"Third Slide"},
         ]',
         'showSponsers' => 1,
         'showPartners' => 1,
         'social-networks' => '[
           {"icon":"instagram-icon.png","title":"Instagram","link":"#"},
           {"icon":"telegram-icon.png","title":"Telegram","link":"#"},
           {"icon":"youtube-icon.png","title":"YouTube","link":"#"},
         ]',
         'email' => 'info@e-gaming.ir',
         'freinds-footer' => '[
           {"text":"لینک 1","link":"#"},
           {"text":"لینک 2","link":"#"},
           {"text":"لینک 3","link":"#"},
           {"text":"لینک 4","link":"#"},
         ]',
         'link-footer' => '[
           {"text":"لینک 1","link":"#"},
           {"text":"لینک 2","link":"#"},
           {"text":"لینک 3","link":"#"},
           {"text":"لینک 4","link":"#"},
         ]',
         'learning-footer' => '[
           {"text":"لینک 1","link":"#"},
           {"text":"لینک 2","link":"#"},
           {"text":"لینک 3","link":"#"},
           {"text":"لینک 4","link":"#"},
         ]'
       ]);
    }
}
