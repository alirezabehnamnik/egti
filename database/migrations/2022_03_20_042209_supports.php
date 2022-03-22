<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Supports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('supports', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('user_id');
          $table->foreign('user_id')->references('id')->on('users');
          $table->string('department');
          $table->unsignedBigInteger('team_id')->nullable();
          $table->foreign('team_id')->references('id')->on('teams');
          $table->string('payment_number')->nullable();
          $table->string('title');
          $table->string('description');
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
