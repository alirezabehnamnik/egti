<?php

namespace App;
use App\Tournaments;
use App\Teams;
use App\User;

use Illuminate\Database\Eloquent\Model;

class TournamentsRegister extends Model
{
  /**
   * Set table name
   * @var string
   */
  protected $table = 'tournaments_register';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'team_id', 'tournament_id', 'user_id', 'enabled'
    ];

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
    return $this->hasOne(User::class, 'id', 'user_id');
  }
}
