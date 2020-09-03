<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class FriendRequests extends Model
{
  /**
   * Set table name
   * @var string
   */
  protected $table = 'friend_requests';

  protected $fillable = [
      'sender_id', 'receiver_id', 'enabled'
  ];

  public function user()
  {
    return $this->hasOne(User::class, 'id', 'sender_id');
  }
}
