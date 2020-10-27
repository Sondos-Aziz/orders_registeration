<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CallStatus extends Model
{
    public function communication(){
        $this->hasMany('App\Models\Communication');
    }
}
