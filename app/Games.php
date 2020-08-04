<?php

namespace App;
use App\Tournaments;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
  /**
   * Set table name
   * @var string
   */
  protected $table = 'games';

  public function trCount()
  {
    return $this->hasMany(Tournaments::class, 'game_id');
  }
}
