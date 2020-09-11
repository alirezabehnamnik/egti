<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MyGamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('my_games')->insert(
        [
         'name' => 'Rainbow6 Siege',
         'tag' => 'r6',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('my_games')->insert(
         [
          'name' => 'Counter-Strike: Global Offensive',
          'tag' => 'csgo',
          'enabled' => 1,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('my_games')->insert(
          [
           'name' => 'Overwatch',
           'tag' => 'ow',
           'enabled' => 1,
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);

         DB::table('my_games')->insert(
           [
            'name' => 'Player Unknown Battlegrounds',
            'tag' => 'pubg',
            'enabled' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ]);

          DB::table('my_games')->insert(
            [
             'name' => 'GTA V',
             'tag' => 'gtav',
             'enabled' => 1,
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
           ]);

           DB::table('my_games')->insert(
             [
              'name' => 'Valorant',
              'tag' => 'valorant',
              'enabled' => 1,
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('my_games')->insert(
              [
               'name' => 'Dota 2',
               'tag' => 'dota',
               'enabled' => 1,
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
             ]);

             DB::table('my_games')->insert(
               [
                'name' => 'FIFA',
                'tag' => 'fifa',
                'enabled' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
              ]);

              DB::table('my_games')->insert(
                [
                 'name' => 'PES',
                 'tag' => 'pes',
                 'enabled' => 1,
                 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
               ]);

               DB::table('my_games')->insert(
                 [
                  'name' => 'Mortal Kombat 11',
                  'tag' => 'mk',
                  'enabled' => 1,
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);

                DB::table('my_games')->insert(
                  [
                   'name' => 'Fortnite',
                   'tag' => 'fort',
                   'enabled' => 1,
                   'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                 ]);

                 DB::table('my_games')->insert(
                   [
                    'name' => 'Counter-Strike',
                    'tag' => 'cs',
                    'enabled' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                  ]);


                  DB::table('my_games')->insert(
                    [
                     'name' => 'For Honor',
                     'tag' => 'fh',
                     'enabled' => 1,
                     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                   ]);

                  DB::table('my_games')->insert(
                    [
                     'name' => 'Clash Royale',
                     'tag' => 'cr',
                     'enabled' => 1,
                     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                   ]);
    }
}
