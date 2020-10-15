<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Teams;
use App\User;

class TeamRequests extends Model
{
  protected $table = 'team_requests';

  protected $fillable = [
      'team_id', 'user_id',
  ];

  public function user()
  {
      return $this->hasOne(User::class, 'id', 'user_id');
  }

  public function team()
  {
      return $this->hasOne(Teams::class, 'id', 'team_id');
  }

}
