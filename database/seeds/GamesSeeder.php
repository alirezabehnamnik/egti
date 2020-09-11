<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('games')->insert(
        [
         'name' => 'Rainbow6 Siege',
         'tag' => 'r6',
         'image' => 'r6.jpg',
         'platforms' => '["1"]',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);
       DB::table('games')->insert(
         [
          'name' => 'Counter-Strike: Global Offensive',
          'tag' => 'csgo',
          'image' => 'csgo.jpg',
          'platforms' => '["1"]',
          'enabled' => 1,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('games')->insert(
          [
           'name' => 'Overwatch',
           'tag' => 'ow',
           'image' => 'ow.jpg',
           'platforms' => '["1"]',
           'enabled' => 1,
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);
         DB::table('games')->insert(
           [
            'name' => 'Player Unknown Battlegrounds',
            'tag' => 'pubg',
            'image' => 'pubg.jpeg',
            'platforms' => '["1"]',
            'enabled' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ]);
          DB::table('games')->insert(
            [
             'name' => 'GTA V',
             'tag' => 'gtav',
             'image' => 'gtav.jpg',
             'platforms' => '["1"]',
             'enabled' => 1,
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ]);
           DB::table('games')->insert(
             [
              'name' => 'Valorant',
              'tag' => 'valorant',
              'image' => 'valorant.jpeg',
              'platforms' => '["1"]',
              'enabled' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
           DB::table('games')->insert(
             [
              'name' => 'FIFA',
              'tag' => 'fifa',
              'image' => 'fifa.jpg',
              'platforms' => '["1"]',
              'enabled' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
           DB::table('games')->insert(
             [
              'name' => 'Mortal Kombat 11',
              'tag' => 'mk11',
              'image' => 'mk11.jpg',
              'platforms' => '["1"]',
              'enabled' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
    }
}
