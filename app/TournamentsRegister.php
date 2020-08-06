<?php

namespace App;
use App\Tournaments;
use App\Teams;
use App\Users;

use Illuminate\Database\Eloquent\Model;

class TournamentsRegister extends Model
{
  /**
   * Set table name
   * @var string
   */
  protected $table = 'tournaments_register';

  public function tournament()
  {
    return $this->hasOne(Tournaments::class, 'id', 'tournament_id');
  }
  public function team()
  {
    return $this->hasOne(Teams::class, 'id', 'team_id');
  }
  public function user()
  {
    return $this->hasOne(Users::class, 'id', 'user_id');
  }
}
