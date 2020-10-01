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

  protected $fillable = [
  'name', 'tag', 'game_id', 'image', 'start_date', 'end_date', 'register_date', 'entry_price', 'max_teams', 'player_per_team', 'prize_pool', 'fplace_reward', 'splace_reward', 'tplace_reward', 'foplace_reward', 'fiplace_reward', 'enabled'
  ];

  public function trResult()
  {
      return $this->hasOne(TournamentsResults::class, 'tournaments_id');
  }

  public function game()
  {
      return $this->hasOne(Games::class, 'id','game_id');
  }
}
