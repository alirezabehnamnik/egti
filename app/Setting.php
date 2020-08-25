<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
  public $timestamps = false;
  /**
   * Set table name
   * @var string
   */
  protected $table = 'settings';

  protected $fillable = [
      'navbar_item'
  ];
}
