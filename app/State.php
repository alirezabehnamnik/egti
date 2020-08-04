<?php

namespace App;
use App\City;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * Set table name
     * @var string
     */
    protected $table = 'states';

    public function City()
    {
        return $this->hasMany(City::class, 'state_id');
    }
}
