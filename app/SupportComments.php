<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Supports;

class SupportComments extends Model
{
  protected $table = 'support_comments';

  protected $fillable = [
      'support_id', 'is_admin', 'message', 'attachment', 'enabled', 'created_at', 'updated_at'
  ];

  protected $casts = [
      'attachment' => 'array',
  ];

  public function ticket()
  {
      return $this->hasMany(Supports::class, 'id', 'support_id');
  }
}
