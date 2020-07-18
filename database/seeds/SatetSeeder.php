<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class SatetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('states')->insert(
        [
         'name' => 'آذربایجان شرقی',
         'tag' => 'azb_sh',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'آذربایجان غربی',
         'tag' => 'azb_gh',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'اردبیل',
         'tag' => 'ard',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'اصفهان',
         'tag' => 'esf',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'البرز',
         'tag' => 'alb',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'ایلام',
         'tag' => 'ila',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'بوشهر',
         'tag' => 'bu',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'تهران',
         'tag' => 'teh',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'چهارمحال وبختیاری',
         'tag' => 'char',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'خراسان جنوبی',
         'tag' => 'skho',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'خراسان رضوی',
         'tag' => 'rkho',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'خراسان شمالی',
         'tag' => 'nkho',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'خوزستان',
         'tag' => 'khoz',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'زنجان',
         'tag' => 'zan',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'سمنان',
         'tag' => 'sem',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'سیستان وبلوچستان',
         'tag' => 'sist',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'فارس',
         'tag' => 'fars',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'قزوین',
         'tag' => 'ghaz',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'قم',
         'tag' => 'qom',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'کردستان',
         'tag' => 'kord',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'کرمان',
         'tag' => 'ker',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'کرمانشاه',
         'tag' => 'kshah',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'کهگیلویه وبویراحمد',
         'tag' => 'koh',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'گلستان',
         'tag' => 'gol',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'گیلان',
         'tag' => 'gil',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'لرستان',
         'tag' => 'lor',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'مازندران',
         'tag' => 'maz',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'مرکزی',
         'tag' => 'mar',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'هرمزگان',
         'tag' => 'hor',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'همدان',
         'tag' => 'ham',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

      DB::table('states')->insert(
        [
         'name' => 'یزد',
         'tag' => 'yazd',
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);
    }
}
