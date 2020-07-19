<?php

namespace App;
use App\State;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
  /**
   * Set table name
   * @var string
   */
  protected $table = 'cities';

  public function cities()
  {
      return $this->belongsTo(State::class, 'state_id');
  }
}
