<?php

namespace App;
use App\User;
use App\Games;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
  /**
   * Set table name
   * @var string
   */
  protected $table = 'teams';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'tag', 'logo', 'user_id', 'players_id', 'standin_id', 'game_id', 'enabled'
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
      'players_id' => 'array',
      'game_id' => 'array',
  ];

  public function captain()
  {
      return $this->hasOne(User::class, 'id', 'user_id');
  }

  public function standin()
  {
      return $this->hasOne(User::class, 'id', 'standin_id');
  }

  public function game()
  {
      return $this->hasMany(Games::class, 'id', 'game_id');
  }


}
