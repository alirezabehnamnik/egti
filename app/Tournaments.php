<?php

namespace App;
use App\TournamentsResults;
use App\Games;

use Illuminate\Database\Eloquent\Model;

class Tournaments extends Model
{
  /**
   * Set table name
   * @var string
   */
  protected $table = 'tournaments';

  public function trResult()
  {
      return $this->hasOne(TournamentsResults::class, 'tournaments_id');
  }

  public function game()
  {
      return $this->hasOne(Games::class, 'id','game_id');
  }
}
