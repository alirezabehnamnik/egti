<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SupportComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('support_comments', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('support_id');
          $table->foreign('support_id')->references('id')->on('supports');
          $table->unsignedSmallInteger('is_admin')->default(0); // 0 is user , 1 is admin
          $table->string('message');
          $table->string('attachment')->nullable();
          $table->smallInteger('enabled')->default(1);
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
