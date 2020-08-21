<?php

namespace App;
use App\State;
use App\City;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'email', 'password', 'family', 'state_id', 'city_id', 'address', 'phone_number', 'steam', 'uplay', 'epicgames', 'riot', 'mygames', 'platforms_id', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'mygames' => 'array',
        'platforms_id' => 'array',
    ];

    public function state()
    {
      return $this->hasOne(State::class, 'id', 'state_id');
    }
    public function city()
    {
      return $this->hasOne(City::class, 'id', 'city_id');
    }
}
