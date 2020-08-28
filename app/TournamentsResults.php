<?php

namespace App;
use App\Teams;

use Illuminate\Database\Eloquent\Model;

class TournamentsResults extends Model
{
  /**
   * Set table name
   * @var string
   */
  protected $table = 'tournaments_results';

  protected $fillable = [
      'tournaments_id', 'fplace_id', 'splace_id', 'tplace_id', 'foplace_id', 'fiplace_id',  'enabled'
  ];

  public function fplace()
  {
    return $this->hasOne(Teams::class, 'id', 'fplace_id');
  }
  public function splace()
  {
    return $this->hasOne(Teams::class, 'id', 'splace_id');
  }
  public function tplace()
  {
    return $this->hasOne(Teams::class, 'id', 'tplace_id');
  }
  public function foplace()
  {
    return $this->hasOne(Teams::class, 'id', 'foplace_id');
  }
  public function fiplace()
  {
    return $this->hasOne(Teams::class, 'id', 'fiplace_id');
  }
}
