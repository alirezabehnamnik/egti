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
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('games')->insert(
         [
          'name' => 'Counter-Strike: Global Offensive',
          'tag' => 'csgo',
          'enabled' => 1,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('games')->insert(
          [
           'name' => 'Overwatch',
           'tag' => 'ow',
           'enabled' => 1,
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);

         DB::table('games')->insert(
           [
            'name' => 'Player Unknown Battlegrounds',
            'tag' => 'pubg',
            'enabled' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ]);

          DB::table('games')->insert(
            [
             'name' => 'GTA V',
             'tag' => 'gtav',
             'enabled' => 1,
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ]);

           DB::table('games')->insert(
             [
              'name' => 'Valorant',
              'tag' => 'valorant',
              'enabled' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

             DB::table('games')->insert(
               [
                'name' => 'FIFA',
                'tag' => 'fifa',
                'enabled' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
              ]);

               DB::table('games')->insert(
                 [
                  'name' => 'Mortal Kombat 11',
                  'tag' => 'mk',
                  'enabled' => 1,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);



    }
}
