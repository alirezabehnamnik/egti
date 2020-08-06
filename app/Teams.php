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
      'name', 'tag', 'logo'

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
      return $this->hasOne(Games::class, 'id', 'game_id');
  }

}
