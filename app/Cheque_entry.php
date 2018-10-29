<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cheque_entry extends Model
{
    public function clients()
    {
        return $this->belongsTo('App\Client','client_id');
    }
}
