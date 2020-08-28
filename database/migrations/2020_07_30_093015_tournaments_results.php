<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TournamentsResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tournaments_results', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('tournaments_id')->unique();
          $table->foreign('tournaments_id')->references('id')->on('tournaments');
          $table->unsignedBigInteger('fplace_id');
          $table->foreign('fplace_id')->references('id')->on('teams');
          $table->unsignedBigInteger('splace_id');
          $table->foreign('splace_id')->references('id')->on('teams');
          $table->unsignedBigInteger('tplace_id');
          $table->foreign('tplace_id')->references('id')->on('teams');
          $table->unsignedBigInteger('foplace_id')->nullable();
          $table->foreign('foplace_id')->references('id')->on('teams');
          $table->unsignedBigInteger('fiplace_id')->nullable();
          $table->foreign('fiplace_id')->references('id')->on('teams');
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
        Schema::dropIfExists('tournaments_results');
    }
}
