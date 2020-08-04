<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
  /**
   * Set table name
   * @var string
   */
  protected $table = 'teams';

  public function captain()
  {
      return $this->hasOne(User::class, 'id', 'user_id');
  }

  public function standin()
  {
      return $this->hasOne(User::class, 'id', 'standin_id');
  }

}
