<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(SatetSeeder::class);
        // $this->call(CitySeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(AdminSeeder::class);
        // $this->call(MyGamesSeeder::class);
        $this->call(GamesSeeder::class);
        // $this->call(SettingSeeder::class);
    }
}
