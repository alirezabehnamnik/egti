<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('admins')->insert(
        [
         'username' => 'Admin',
         'password' => Hash::make('Alireza13751376@'),
         'email' => 'Alirezabehnamnik@gmail.com',
         'name' => 'Alireza',
         'family' => 'Behnamnik',
         'role' => '["owner"]',
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);
    }
}
