<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function cheque_entry()
    {
        return $this->hasMany('App\Cheque_entry');
    }
    public function balance()
    {
        return $this->hasOne('App\Balance');
    }
    public function agent()
    {
        return $this->hasMany('App\Agent');
    }
}
