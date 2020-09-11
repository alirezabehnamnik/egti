<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::table('cities')->insert([
         'name' => 'آبادان',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آباده',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آبدانان',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آبیک',
         'state_id' => 18,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آذرشهر',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آرادان',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آران وبیدگل',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آزادشهر',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آستارا',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آستانه اشرفیه',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آشتیان',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آغاجاری',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آق قلا',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آمل',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آوج',
         'state_id' => 18,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ابرکوه',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ابوموسی',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ابهر',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اراک',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اردبیل',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اردستان',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اردکان',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اردل',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ارزوییه',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ارسنجان',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ارومیه',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ازنا',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'استهبان',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اسدآباد',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اسفراین',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اسکو',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اسلام آبادغرب',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اسلامشهر',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اشتهارد',
         'state_id' => 5,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اشکذر',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اشنویه',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اصفهان',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اصلاندوز',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اقلید',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'البرز',
         'state_id' => 18,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'الیگودرز',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'املش',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'امیدیه',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'انار',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اندیکا',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اندیمشک',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اهر',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اهواز',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ایجرود',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ایذه',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ایرانشهر',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ایلام',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ایوان',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بابل',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بابلسر',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'باخرز',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'باشت',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'باغ ملک',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بافت',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بافق',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بانه',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'باوی',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بجستان',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بجنورد',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بدره',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'برخوار',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بردسکن',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بردسیر',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بروجرد',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بروجن',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بستان آباد',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بستک',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بشاگرد',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بشرویه',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بم',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بمپور',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بن',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بناب',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بندرانزلی',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بندرعباس',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بندرگز',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بندرلنگه',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بندرماهشهر',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بو یین و میاندشت',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بوانات',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بویین زهرا',
         'state_id' => 18,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بوشهر',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بوکان',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بویراحمد',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بهاباد',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بهار',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بهارستان',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بهبهان',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بهشهر',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بهمیی',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بیجار',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بیرجند',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بیله سوار',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بینالود',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پارس آباد',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پارسیان',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پاسارگاد',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پاکدشت',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پاوه',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پردیس',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پلدختر',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پلدشت',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پیرانشهر',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پیشوا',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تاکستان',
         'state_id' => 18,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تایباد',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تبریز',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تربت جام',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تربت حیدریه',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ترکمن',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تفت',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تفرش',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تکاب',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تنکابن',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تنگستان',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تویسرکان',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تهران',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تیران وکرون',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ثلاث باباجانی',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جاجرم',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جاسک',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جغتای',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جلفا',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جم',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جوانرود',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جویبار',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جوین',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جهرم',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جیرفت',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چابهار',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چادگان',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چاراویماق',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چالدران',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چالوس',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چایپاره',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چرام',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چرداول',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چگنی',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چناران',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'حاجی اباد',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'حمیدیه',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خاتم',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خاش',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خانمیرزا',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خداآفرین',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خدابنده',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خرامه',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خرم آباد',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خرم بید',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خرمدره',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خرمشهر',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خلخال',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خلیل آباد',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خمیر',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خمین',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خمینی شهر',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خنج',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خنداب',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خواف',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خوانسار',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خوی',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خور و بیابانک',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خوسف',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خوشاب',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'داراب',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دالاهو',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دامغان',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'داورزن',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'درگز',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'درمیان',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دره شهر',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دزفول',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دشت آزادگان',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دشتستان',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دشتی',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دلفان',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دلگان',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دلیجان',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دماوند',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دنا',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دورود',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دهاقان',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دهگلان',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دهلران',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دیر',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دیلم',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دیواندره',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رابر',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'راز و جرگلان',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رامسر',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رامشیر',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رامهرمز',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رامیان',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'راور',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ری',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رباط کریم',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رزن',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رستم',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رشت',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رشتخوار',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رضوانشهر',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رفسنجان',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'روانسر',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رودان',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رودبار',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رودبارجنوب',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رودسر',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رومشکان',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ریگان',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زابل',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زاوه',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زاهدان',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زرند',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زرندیه',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زرین دشت',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زنجان',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زهک',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زیرکوه',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ساری',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سامان',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ساوجبلاغ',
         'state_id' => 5,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ساوه',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سبزوار',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سپیدان',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سراب',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سراوان',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سرایان',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سرباز',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سربیشه',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سرپل ذهاب',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سرخس',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سرخه',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سردشت',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سرعین',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سروآباد',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سروستان',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سقز',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سلسله',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سلطانیه',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سلماس',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سمنان',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سمیرم',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سنقر',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سنندج',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سوادکوه',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سوادکوه شمالی',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سیاهکل',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سیب و سوران',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سیرجان',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سیروان',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سیریک',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سیمرغ',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شادگان',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شازند',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شاهرود',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شاهین دژ',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شاهین شهرومیمه',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شبستر',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شفت',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شمیرانات',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شوش',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شوشتر',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شوط',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شهربابک',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شهرضا',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شهرکرد',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شهریار',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شیراز',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شیروان',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'صالح آباد',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'صحنه',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'صومعه سرا',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'طارم',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'طالقان',
         'state_id' => 5,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'طبس',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'طوالش',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'عباس آباد',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'عجب شیر',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'عسلویه',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'علی آباد',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'عنبرآباد',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فارسان',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فاروج',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فاریاب',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فامنین',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فراشبند',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فراهان',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فردوس',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فردیس',
         'state_id' => 5,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فریدن',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فریدونشهر',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فریدونکنار',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فریمان',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فسا',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فلاورجان',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فنوج',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فومن',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فهرج',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فیروزآباد',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فیروزکوه',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فیروزه',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قایم شهر',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قاینات',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قدس',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قرچک',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قروه',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قزوین',
         'state_id' => 18,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قشم',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قصرشیرین',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قصرقند',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قلعه گنج',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قم',
         'state_id' => 19,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قوچان',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قیروکارزین',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کارون',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کازرون',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کاشان',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کاشمر',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کامیاران',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کبودرآهنگ',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کرج',
         'state_id' => 5,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کردکوی',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کرمان',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کرمانشاه',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کلات',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کلاردشت',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کلاله',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کلیبر',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کمیجان',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کنارک',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کنگان',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کنگاور',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کوار',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کوثر',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کوهبنان',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کوهدشت',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کوهرنگ',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کهگیلویه',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کهنوج',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کیار',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گالیکش',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گتوند',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گچساران',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گراش',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گرگان',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گرمسار',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گرمه',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گرمی',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گلپایگان',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گلوگاه',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گمیشان',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گناباد',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گناوه',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گنبدکاووس',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گیلانغرب',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لارستان',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لالی',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لامرد',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لاهیجان',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لردگان',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لنجان',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لنده',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لنگرود',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ماسال',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ماکو',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مانه وسملقان',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ماهنشان',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مبارکه',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'محلات',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'محمودآباد',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مراغه',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مراوه تپه',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مرند',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مرودشت',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مریوان',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مسجدسلیمان',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مشگین شهر',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مشهد',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ملارد',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ملایر',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ملکان',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ملکشاهی',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ممسنی',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'منوجان',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مه ولات',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مهاباد',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مهدی شهر',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مهر',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مهران',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مهرستان',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مهریز',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'میامی',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'میاندوآب',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'میاندورود',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'میانه',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'میبد',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'میرجاوه',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'میناب',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مینودشت',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نایین',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نجف آباد',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نرماشیر',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نطنز',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نظرآباد',
         'state_id' => 5,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نقده',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نکا',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نمین',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نور',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نوشهر',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نهاوند',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نهبندان',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نی ریز',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نیر',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نیشابور',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نیک شهر',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نیمروز',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ورامین',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ورزقان',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هامون',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هرسین',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هریس',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هشترود',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هفتکل',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'همدان',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هندیجان',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هوراند',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هویزه',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هیرمند',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'یزد',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

    }
}
