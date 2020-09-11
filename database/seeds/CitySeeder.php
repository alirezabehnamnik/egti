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
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آباده',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آبدانان',
         'tag' => 'default',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آبیک',
         'tag' => 'default',
         'state_id' => 18,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آذرشهر',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آرادان',
         'tag' => 'default',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آران وبیدگل',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آزادشهر',
         'tag' => 'default',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آستارا',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آستانه اشرفیه',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آشتیان',
         'tag' => 'default',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آغاجاری',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آق قلا',
         'tag' => 'default',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آمل',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'آوج',
         'tag' => 'default',
         'state_id' => 18,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ابرکوه',
         'tag' => 'default',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ابوموسی',
         'tag' => 'default',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ابهر',
         'tag' => 'default',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اراک',
         'tag' => 'default',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اردبیل',
         'tag' => 'default',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اردستان',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اردکان',
         'tag' => 'default',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اردل',
         'tag' => 'default',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ارزوییه',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ارسنجان',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ارومیه',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ازنا',
         'tag' => 'default',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'استهبان',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اسدآباد',
         'tag' => 'default',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اسفراین',
         'tag' => 'default',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اسکو',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اسلام آبادغرب',
         'tag' => 'default',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اسلامشهر',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اشتهارد',
         'tag' => 'default',
         'state_id' => 5,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اشکذر',
         'tag' => 'default',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اشنویه',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اصفهان',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اصلاندوز',
         'tag' => 'default',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اقلید',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'البرز',
         'tag' => 'default',
         'state_id' => 18,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'الیگودرز',
         'tag' => 'default',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'املش',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'امیدیه',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'انار',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اندیکا',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اندیمشک',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اهر',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'اهواز',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ایجرود',
         'tag' => 'default',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ایذه',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ایرانشهر',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ایلام',
         'tag' => 'default',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ایوان',
         'tag' => 'default',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بابل',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بابلسر',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'باخرز',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'باشت',
         'tag' => 'default',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'باغ ملک',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بافت',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بافق',
         'tag' => 'default',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بانه',
         'tag' => 'default',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'باوی',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بجستان',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بجنورد',
         'tag' => 'default',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بدره',
         'tag' => 'default',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'برخوار',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بردسکن',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بردسیر',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بروجرد',
         'tag' => 'default',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بروجن',
         'tag' => 'default',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بستان آباد',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بستک',
         'tag' => 'default',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بشاگرد',
         'tag' => 'default',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بشرویه',
         'tag' => 'default',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بم',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بمپور',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بن',
         'tag' => 'default',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بناب',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بندرانزلی',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بندرعباس',
         'tag' => 'default',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بندرگز',
         'tag' => 'default',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بندرلنگه',
         'tag' => 'default',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بندرماهشهر',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بو یین و میاندشت',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بوانات',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بویین زهرا',
         'tag' => 'default',
         'state_id' => 18,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بوشهر',
         'tag' => 'default',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بوکان',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بویراحمد',
         'tag' => 'default',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بهاباد',
         'tag' => 'default',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بهار',
         'tag' => 'default',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بهارستان',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بهبهان',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بهشهر',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بهمیی',
         'tag' => 'default',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بیجار',
         'tag' => 'default',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بیرجند',
         'tag' => 'default',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بیله سوار',
         'tag' => 'default',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'بینالود',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پارس آباد',
         'tag' => 'default',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پارسیان',
         'tag' => 'default',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پاسارگاد',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پاکدشت',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پاوه',
         'tag' => 'default',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پردیس',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پلدختر',
         'tag' => 'default',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پلدشت',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پیرانشهر',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'پیشوا',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تاکستان',
         'tag' => 'default',
         'state_id' => 18,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تایباد',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تبریز',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تربت جام',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تربت حیدریه',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ترکمن',
         'tag' => 'default',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تفت',
         'tag' => 'default',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تفرش',
         'tag' => 'default',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تکاب',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تنکابن',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تنگستان',
         'tag' => 'default',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تویسرکان',
         'tag' => 'default',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تهران',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'تیران وکرون',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ثلاث باباجانی',
         'tag' => 'default',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جاجرم',
         'tag' => 'default',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جاسک',
         'tag' => 'default',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جغتای',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جلفا',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جم',
         'tag' => 'default',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جوانرود',
         'tag' => 'default',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جویبار',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جوین',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جهرم',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'جیرفت',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چابهار',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چادگان',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چاراویماق',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چالدران',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چالوس',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چایپاره',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چرام',
         'tag' => 'default',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چرداول',
         'tag' => 'default',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چگنی',
         'tag' => 'default',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'چناران',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'حاجی اباد',
         'tag' => 'default',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'حمیدیه',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خاتم',
         'tag' => 'default',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خاش',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خانمیرزا',
         'tag' => 'default',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خداآفرین',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خدابنده',
         'tag' => 'default',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خرامه',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خرم آباد',
         'tag' => 'default',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خرم بید',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خرمدره',
         'tag' => 'default',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خرمشهر',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خلخال',
         'tag' => 'default',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خلیل آباد',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خمیر',
         'tag' => 'default',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خمین',
         'tag' => 'default',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خمینی شهر',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خنج',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خنداب',
         'tag' => 'default',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خواف',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خوانسار',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خوی',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خور و بیابانک',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خوسف',
         'tag' => 'default',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'خوشاب',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'داراب',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دالاهو',
         'tag' => 'default',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دامغان',
         'tag' => 'default',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'داورزن',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'درگز',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'درمیان',
         'tag' => 'default',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دره شهر',
         'tag' => 'default',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دزفول',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دشت آزادگان',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دشتستان',
         'tag' => 'default',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دشتی',
         'tag' => 'default',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دلفان',
         'tag' => 'default',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دلگان',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دلیجان',
         'tag' => 'default',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دماوند',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دنا',
         'tag' => 'default',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دورود',
         'tag' => 'default',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دهاقان',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دهگلان',
         'tag' => 'default',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دهلران',
         'tag' => 'default',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دیر',
         'tag' => 'default',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دیلم',
         'tag' => 'default',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'دیواندره',
         'tag' => 'default',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رابر',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'راز و جرگلان',
         'tag' => 'default',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رامسر',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رامشیر',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رامهرمز',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رامیان',
         'tag' => 'default',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'راور',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ری',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رباط کریم',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رزن',
         'tag' => 'default',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رستم',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رشت',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رشتخوار',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رضوانشهر',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رفسنجان',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'روانسر',
         'tag' => 'default',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رودان',
         'tag' => 'default',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رودبار',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رودبارجنوب',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رودسر',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'رومشکان',
         'tag' => 'default',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ریگان',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زابل',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زاوه',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زاهدان',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زرند',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زرندیه',
         'tag' => 'default',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زرین دشت',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زنجان',
         'tag' => 'default',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زهک',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'زیرکوه',
         'tag' => 'default',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ساری',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سامان',
         'tag' => 'default',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ساوجبلاغ',
         'tag' => 'default',
         'state_id' => 5,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ساوه',
         'tag' => 'default',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سبزوار',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سپیدان',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سراب',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سراوان',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سرایان',
         'tag' => 'default',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سرباز',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سربیشه',
         'tag' => 'default',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سرپل ذهاب',
         'tag' => 'default',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سرخس',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سرخه',
         'tag' => 'default',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سردشت',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سرعین',
         'tag' => 'default',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سروآباد',
         'tag' => 'default',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سروستان',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سقز',
         'tag' => 'default',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سلسله',
         'tag' => 'default',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سلطانیه',
         'tag' => 'default',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سلماس',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سمنان',
         'tag' => 'default',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سمیرم',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سنقر',
         'tag' => 'default',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سنندج',
         'tag' => 'default',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سوادکوه',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سوادکوه شمالی',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سیاهکل',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سیب و سوران',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سیرجان',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سیروان',
         'tag' => 'default',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سیریک',
         'tag' => 'default',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'سیمرغ',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شادگان',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شازند',
         'tag' => 'default',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شاهرود',
         'tag' => 'default',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شاهین دژ',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شاهین شهرومیمه',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شبستر',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شفت',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شمیرانات',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شوش',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شوشتر',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شوط',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شهربابک',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شهرضا',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شهرکرد',
         'tag' => 'default',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شهریار',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شیراز',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'شیروان',
         'tag' => 'default',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'صالح آباد',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'صحنه',
         'tag' => 'default',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'صومعه سرا',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'طارم',
         'tag' => 'default',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'طالقان',
         'tag' => 'default',
         'state_id' => 5,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'طبس',
         'tag' => 'default',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'طوالش',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'عباس آباد',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'عجب شیر',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'عسلویه',
         'tag' => 'default',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'علی آباد',
         'tag' => 'default',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'عنبرآباد',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فارسان',
         'tag' => 'default',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فاروج',
         'tag' => 'default',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فاریاب',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فامنین',
         'tag' => 'default',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فراشبند',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فراهان',
         'tag' => 'default',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فردوس',
         'tag' => 'default',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فردیس',
         'tag' => 'default',
         'state_id' => 5,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فریدن',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فریدونشهر',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فریدونکنار',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فریمان',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فسا',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فلاورجان',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فنوج',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فومن',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فهرج',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فیروزآباد',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فیروزکوه',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'فیروزه',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قایم شهر',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قاینات',
         'tag' => 'default',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قدس',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قرچک',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قروه',
         'tag' => 'default',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قزوین',
         'tag' => 'default',
         'state_id' => 18,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قشم',
         'tag' => 'default',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قصرشیرین',
         'tag' => 'default',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قصرقند',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قلعه گنج',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قم',
         'tag' => 'default',
         'state_id' => 19,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قوچان',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'قیروکارزین',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کارون',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کازرون',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کاشان',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کاشمر',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کامیاران',
         'tag' => 'default',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کبودرآهنگ',
         'tag' => 'default',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کرج',
         'tag' => 'default',
         'state_id' => 5,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کردکوی',
         'tag' => 'default',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کرمان',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کرمانشاه',
         'tag' => 'default',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کلات',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کلاردشت',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کلاله',
         'tag' => 'default',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کلیبر',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کمیجان',
         'tag' => 'default',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کنارک',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کنگان',
         'tag' => 'default',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کنگاور',
         'tag' => 'default',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کوار',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کوثر',
         'tag' => 'default',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کوهبنان',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کوهدشت',
         'tag' => 'default',
         'state_id' => 26,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کوهرنگ',
         'tag' => 'default',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کهگیلویه',
         'tag' => 'default',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کهنوج',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'کیار',
         'tag' => 'default',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گالیکش',
         'tag' => 'default',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گتوند',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گچساران',
         'tag' => 'default',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گراش',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گرگان',
         'tag' => 'default',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گرمسار',
         'tag' => 'default',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گرمه',
         'tag' => 'default',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گرمی',
         'tag' => 'default',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گلپایگان',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گلوگاه',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گمیشان',
         'tag' => 'default',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گناباد',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گناوه',
         'tag' => 'default',
         'state_id' => 7,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گنبدکاووس',
         'tag' => 'default',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'گیلانغرب',
         'tag' => 'default',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لارستان',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لالی',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لامرد',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لاهیجان',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لردگان',
         'tag' => 'default',
         'state_id' => 9,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لنجان',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لنده',
         'tag' => 'default',
         'state_id' => 23,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'لنگرود',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ماسال',
         'tag' => 'default',
         'state_id' => 25,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ماکو',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مانه وسملقان',
         'tag' => 'default',
         'state_id' => 12,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ماهنشان',
         'tag' => 'default',
         'state_id' => 14,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مبارکه',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'محلات',
         'tag' => 'default',
         'state_id' => 28,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'محمودآباد',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مراغه',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مراوه تپه',
         'tag' => 'default',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مرند',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مرودشت',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مریوان',
         'tag' => 'default',
         'state_id' => 20,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مسجدسلیمان',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مشگین شهر',
         'tag' => 'default',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مشهد',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ملارد',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ملایر',
         'tag' => 'default',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ملکان',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ملکشاهی',
         'tag' => 'default',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ممسنی',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'منوجان',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مه ولات',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مهاباد',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مهدی شهر',
         'tag' => 'default',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مهر',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مهران',
         'tag' => 'default',
         'state_id' => 6,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مهرستان',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مهریز',
         'tag' => 'default',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'میامی',
         'tag' => 'default',
         'state_id' => 15,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'میاندوآب',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'میاندورود',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'میانه',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'میبد',
         'tag' => 'default',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'میرجاوه',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'میناب',
         'tag' => 'default',
         'state_id' => 29,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'مینودشت',
         'tag' => 'default',
         'state_id' => 24,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نایین',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نجف آباد',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نرماشیر',
         'tag' => 'default',
         'state_id' => 21,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نطنز',
         'tag' => 'default',
         'state_id' => 4,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نظرآباد',
         'tag' => 'default',
         'state_id' => 5,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نقده',
         'tag' => 'default',
         'state_id' => 2,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نکا',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نمین',
         'tag' => 'default',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نور',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نوشهر',
         'tag' => 'default',
         'state_id' => 27,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نهاوند',
         'tag' => 'default',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نهبندان',
         'tag' => 'default',
         'state_id' => 10,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نی ریز',
         'tag' => 'default',
         'state_id' => 17,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نیر',
         'tag' => 'default',
         'state_id' => 3,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نیشابور',
         'tag' => 'default',
         'state_id' => 11,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نیک شهر',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'نیمروز',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ورامین',
         'tag' => 'default',
         'state_id' => 8,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'ورزقان',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هامون',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هرسین',
         'tag' => 'default',
         'state_id' => 22,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هریس',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هشترود',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هفتکل',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'همدان',
         'tag' => 'default',
         'state_id' => 30,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هندیجان',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هوراند',
         'tag' => 'default',
         'state_id' => 1,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هویزه',
         'tag' => 'default',
         'state_id' => 13,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'هیرمند',
         'tag' => 'default',
         'state_id' => 16,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       DB::table('cities')->insert([
         'name' => 'یزد',
         'tag' => 'default',
         'state_id' => 31,
         'enabled' => 1,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

    }
}
