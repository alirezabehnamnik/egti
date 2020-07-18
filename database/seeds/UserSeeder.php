<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert(
        [
         'username' => 'test',
         'password' => Hash::make('111'),
         'email' => 'test@test.com',
         'name' => 'a',
         'family' => 'b',
         'state_id' => 17,
         'city_id' => 273,
         'address' => 'shiraz',
         'phone_number' => '09370827288',
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);
    }
}
