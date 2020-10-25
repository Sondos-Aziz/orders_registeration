<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function orders(){
        $this->hasMany('App\Models\Order');
    }
}
