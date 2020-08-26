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

  protected $fillable = [
      'name', 'tag', 'image', 'platforms', 'enabled'
  ];

  protected $casts = [
      'platforms' => 'array',
  ];

  public function trCount()
  {
    return $this->hasMany(Tournaments::class, 'game_id');
  }

}
