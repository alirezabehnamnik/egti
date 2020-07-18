<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tournaments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tournaments', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('tag')->unique();
          $table->unsignedBigInteger('game_id');
          $table->foreign('game_id')->references('id')->on('games');
          $table->string('image');
          $table->timestamp('start_date')->nullable();
          $table->timestamp('end_date')->nullable();
          $table->smallInteger('entry_price');
          $table->smallInteger('teams_count');
          $table->smallInteger('max_teams');
          $table->smallInteger('player_per_team');
          $table->smallInteger('prize_pool');
          $table->smallInteger('fplace_reward');
          $table->smallInteger('splace_reward');
          $table->smallInteger('tplace_reward');
          $table->smallInteger('foplace_reward');
          $table->smallInteger('fiplace_reward');
          $table->string('enabled');
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
        Schema::dropIfExists('tournaments');
    }
}
