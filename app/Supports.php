<?php

namespace App;

use App\User;
use App\Teams;

use Illuminate\Database\Eloquent\Model;

class Supports extends Model
{
    protected $table = 'supports';

    protected $fillable = [
        'user_id', 'department', 'team_id', 'payment_number', 'title', 'description', 'attachment', 'enabled'
    ];

    protected $casts = [
        'attachment' => 'array',
    ];

    public function sender()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function team()
    {
        return $this->hasOne(Teams::class, 'id', 'team_id');
    }

}
