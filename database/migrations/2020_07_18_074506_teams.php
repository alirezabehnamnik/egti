<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Teams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('teams', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('tag')->unique();
          $table->string('logo');
          $table->unsignedBigInteger('user_id');
          $table->foreign('user_id')->references('id')->on('users');
          $table->string('players_id');
          $table->unsignedBigInteger('standin_id');
          $table->foreign('standin_id')->references('id')->on('users');
          $table->string('game_id');
          $table->string('reason')->nullable();
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
        Schema::dropIfExists('teams');
    }
}
