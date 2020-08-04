<?php

namespace App;
use App\TournamentsResults;

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
}
