<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    public function clients()
    {
        return $this->belongsTo('App\Client','client_id');
    }
}
