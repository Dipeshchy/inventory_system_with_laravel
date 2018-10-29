<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function cheque_entry()
    {
        return $this->hasMany('App\Cheque_entry');
    }
}
