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
          $table->date('start_date')->nullable();
          $table->date('end_date')->nullable();
          $table->date('register_date')->nullable();
          $table->Integer('entry_price')->nullable();
          $table->smallInteger('teams_count')->default(0);
          $table->smallInteger('max_teams');
          $table->smallInteger('player_per_team');
          $table->Integer('prize_pool')->nullable();
          $table->Integer('fplace_reward')->nullable();
          $table->Integer('splace_reward')->nullable();
          $table->Integer('tplace_reward')->nullable();
          $table->Integer('foplace_reward')->nullable();
          $table->Integer('fiplace_reward')->nullable();
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
        Schema::dropIfExists('tournaments');
    }
}
