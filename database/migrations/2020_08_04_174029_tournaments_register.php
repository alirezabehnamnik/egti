<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TournamentsRegister extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tournaments_register', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('tournament_id');
          $table->foreign('tournament_id')->references('id')->on('tournaments');
          $table->unsignedBigInteger('team_id');
          $table->foreign('team_id')->references('id')->on('teams');
          $table->unsignedBigInteger('user_id');
          $table->foreign('user_id')->references('id')->on('users');
          $table->unsignedBigInteger('enabled');
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
        Schema::dropIfExists('tournaments_register');
    }
}
